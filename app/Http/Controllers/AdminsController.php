<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leadership;
use App\Models\Member;
use App\Models\Membership;
use App\Models\Order;
use App\Models\SendEmail;
use App\Models\Blog;
use Illuminate\Support\Str;
use Session;
use DateTime;
use DB;

use Illuminate\Support\Facades\Redirect;


class AdminsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $page_name = "Admin Home";
        $page_title = "Admin Home";
        return view('admin.index', compact('page_name','page_title'));
    }

    public function addLeadership(){
        $page_name = "Leadership";
        $page_title = "formfiletext";
        return view('admin.addLeadership', compact('page_name','page_title'));
    }

    public function leaderships(){
        $page_name = "Leadership";
        $page_title = "list";
        $Leadership = Leadership::all();
        return view('admin.leaderships', compact('page_name','page_title','Leadership'));
    }

    public function add_Leadership(Request $request){
        $name = $request->name;
        $position = $request->position;
        $content = $request->content;

        $path = 'uploads/leaderships';
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $image = $filename;

        $Leadership = new Leadership;
        $Leadership->name = $name;
        $Leadership->position = $position;
        $Leadership->content = $content;
        $Leadership->image = $image;
        $Leadership->save();

        Session::flash('message', "$request->name has been added as new Leader");
        return Redirect::back();
    }

    public function deleteLeadership($id){
        Leadership::where('id',$id)->delete();
        Session::flash('message', "Leader has been deleted");
        return Redirect::back();
    }

    public function editLeadership($id){
        $Leadership = Leadership::find($id);
        $page_name = "Leadership";
        $page_title = "formfiletext";
        return view('admin.editLeadership', compact('page_name','page_title','Leadership'));
    }

    public function edit_Leadership(Request $request, $id){
        $path = 'uploads/leaderships';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }

        $updateDetails = array(
            'name' => $request->name,
            'position' => $request->position,
            'image' => $image,
            'content' => $request->content,
        );
        DB::table('leaderships')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Updated");
        return Redirect::back();
    }

    public function addMember(){
        $page_name = "Member";
        $page_title = "formfiletext";
        return view('admin.addMember', compact('page_name','page_title'));
    }

    public function members(){
        $page_name = "Member";
        $page_title = "list";
        $Member = Membership::all();
        return view('admin.members', compact('page_name','page_title','Member'));
    }

    public function member(){
        $page_name = "Member";
        $page_title = "list";
        $Member = Membership::all();
        return view('admin.members', compact('page_name','page_title','Member'));
    }

    public function add_Member(Request $request){
        $name = $request->name;
        $service = $request->service;
        $content = $request->content;

        $path = 'uploads/members';
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $image = $filename;

        $Member = new Member;
        $Member->name = $name;
        $Member->service = $service;
        $Member->content = $content;
        $Member->image = $image;
        $Member->save();

        Session::flash('message', "$request->name has been added as new Leader");
        return Redirect::back();
    }

    public function deleteMember($id){
        Member::where('id',$id)->delete();
        Session::flash('message', "Leader has been deleted");
        return Redirect::back();
    }

    public function view_member($id){
        $Member = Member::find($id);
        $Membership = Membership::where('email',$id)->get();
        $page_name = "Member";
        $page_title = "formfiletext";
        return view('admin.viewMember', compact('page_name','page_title','Membership'));
    }



    public function edit_Member(Request $request, $id){
        $path = 'uploads/members';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }

        $updateDetails = array(
            'name' => $request->name,
            'service' => $request->service,
            'image' => $image,
            'content' => $request->content,
        );
        DB::table('members')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Updated");
        return Redirect::back();
    }

    public function addBlog(){

        $page_title = 'formfiletext';//For Layout Inheritance
        $page_name = 'add Blog';
        return view('admin.addBlog',compact('page_title','page_name'));
    }

    public function add_Blog(Request $request){
        $path = 'uploads/blogs';
        if(isset($request->image_one)){
            $fileSize = $request->file('image_one')->getSize();
                if($fileSize>=1800000){
                Session::flash('message', "File Exceeded the maximum allowed Size");
                Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
                return Redirect::back();
                }else{

                $file = $request->file('image_one');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_one = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_one);
                }
        }else{
            $image_one = $request->pro_img_cheat;
        }

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slung = Str::slug($request->title);
        $blog->link = $request->link;
        $blog->content = $request->content;
        $blog->source = $request->source;
        $blog->image = $image_one;
        $blog->save();
        Session::flash('message', "Blog Has Been Added");
        return Redirect::back();
    }

    public function blog(){
        $Blog = Blog::all();
        $page_title = 'list';
        $page_name = 'Blog';
        return view('admin.blog',compact('page_title','Blog','page_name'));
    }

    public function editBlog($id){
        $Blog = Blog::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Edit Blog';
        return view('admin.editBlog',compact('page_title','Blog','page_name'));
    }


    public function edit_Blog(Request $request, $id){
        $path = 'uploads/blogs';
        if(isset($request->image_one)){
            $fileSize = $request->file('image_one')->getSize();
                if($fileSize>=1800000){
                Session::flash('message', "File Exceeded the maximum allowed Size");
                Session::flash('messageError', "An error occured, You may have exceeded the maximum size for an image you uploaded");
                return Redirect::back();
                }else{

                $file = $request->file('image_one');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $timestamp = new Datetime();
                $new_timestamp = $timestamp->format('Y-m-d H:i:s');
                $image_main_temp = $new_timestamp.'image'.$filename;
                $image_one = str_replace(' ', '',$image_main_temp);
                $file->move($path, $image_one);
                }
        }else{
            $image_one = $request->image_cheat;
        }

        $updateDetails = array(
            'title' => $request->title,
            'content' => $request->content,
            'link' => $request->link,
            'source' =>$request->source,
            'image' =>$image_one,
        );
        DB::table('blogs')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function delete_Blog($id){
        DB::table('blogs')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function generate_number($id){
        $this->generateMembership($id);
        return Redirect::back();
    }

    public function generateMembership($id){
         $GetDetails = Membership::find($id);
         $Category = $GetDetails->category;
         if($Category == "Airforce"){
            $initial = "F";
         }elseif($Category == "Army"){
            $initial = "A";
         }else{
            $initial = "N";
         }
        //Get Last Order
        $Order = Order::get();
        if($Order->isEmpty()){
            $Order = 1;
        }else{
             $OrderGet = Order::orderBy('id', 'DESC')->first();
            //  dd($OrderGet);
             $CurrentID = $OrderGet->id;
             $Order = $CurrentID+1;
        }
        $Number = "KV-$initial-$Order";

        $Orders = new Order;
        $Orders->membership_id = $id;
        $Orders->save();


        $updateDetails = array(
            'number'=>$Number,
        );
        // Get Member Email Address
        $MemberEmail = $GetDetails->email;
        $MemberName = $GetDetails->name;
        // Send Member an Email
        SendEmail::SendNotfication($MemberEmail,$Number, $MemberName);
        DB::table('memberships')->where('id',$id)->update($updateDetails);
    }

    public function mailMembershipNumber($id){
        $GetDetails = Membership::find($id);
        // Get Member Email Address
        $MemberEmail = $GetDetails->email;
        $MemberName = $GetDetails->name;
        $Number = $GetDetails->number;
        SendEmail::SendNotfication($MemberEmail,$Number, $MemberName);
        Session::flash('message', "Membership Number Has Been Sent to ".$MemberName."");
        return Redirect::back();
    }

}
