<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leadership;
use Session;
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

}
