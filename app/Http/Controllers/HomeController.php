<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Membership;
use App\Models\User;
use Session;
use DateTime;
use DB;
use Hash;
use Illuminate\Support\Facades\Redirect;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }

    public function releases()
    {
        return view('front.releases');
    }

    public function who_we_are()
    {
        return view('front.who_we_are');
    }

    public function explore()
    {
        return view('front.explore');
    }

    public function regions()
    {
        return view('front.regions');
    }


    public function our_history()
    {
        return view('front.our_history');
    }

    public function contact_us()
    {
        return view('front.contact_us');
    }

    public function register()
    {
        return view('front.register');
    }

    public function summary(){
        $id = Auth::User()->id;
        $User = User::find(Auth::User()->id);
        //
        $pdf = PDF::loadView('members.summary',compact('User'));
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
        // return view('members.summary', compact('User'));
    }

    public function membership(Request $request)
    {
        $path = 'uploads/files';
        if(isset($request->passport)){
            $file = $request->file('passport');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'passport'.$filename;
            $filename = str_replace(' ', '',$image_main_temp);
            $file->move($path, $filename);
            $passport = $filename;
        }else{
            $passport = $request->image_cheat;
        }

        if(isset($request->identity)){
            $file = $request->file('identity');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'identity'.$filename;
            $filename = str_replace(' ', '',$image_main_temp);
            $file->move($path, $filename);
            $identity = $filename;
        }else{
            $identity = $request->image_cheat;
        }

        if(isset($request->military_id)){
            $file = $request->file('military_id');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $timestamp = new Datetime();
            $new_timestamp = $timestamp->format('Y-m-d H:i:s');
            $image_main_temp = $new_timestamp.'military_id'.$filename;
            $filename = str_replace(' ', '',$image_main_temp);
            $file->move($path, $filename);
            $military_id = $filename;
        }else{
            $military_id = $request->image_cheat;
        }

        // Register
        $user = new User;
        $user->password = Hash::make($request->service_number);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        // login
        $user = User::where('email','=',$request->email)->first();
        Auth::loginUsingId($user->id, TRUE);

        $Membership = new Membership;
        $Membership->name = $request->name;
        $Membership->category = $request->category;
        $Membership->yob = $request->yob;
        $Membership->county = $request->county;
        $Membership->subcounty = $request->subcounty;
        $Membership->phone = $request->phone;
        $Membership->email = $request->email;
        $Membership->retirement = $request->retirement;
        $Membership->service_number = $request->service_number;
        $Membership->passport = $passport;
        $Membership->identity = $identity;
        $Membership->military_id = $military_id;

        if($Membership->save()){
            Session::flash('message', "Congratulations!! Your Details Have Been Received");
            // return Redirect::back();
            // return $this->summary();
            return redirect()->route('members');
        }

    }





}
