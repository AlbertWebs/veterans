<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;
use Session;
use DateTime;
use Hash;
use Illuminate\Support\Facades\Redirect;
use PDF;

class MembersController extends Controller
{
    public function index(){
        $id = Auth::User()->id;
        $User = User::find(Auth::User()->id);
        return view('members.index', compact('User'));
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

    public function sum(){
        $User = User::find(1);
        return view('members.summary', compact('User'));
    }

    public function save_changes(Request $request){
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
            $passport = $request->passport_cheat;
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
            $identity = $request->identity_cheat;
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
            $military_id = $request->military_id_cheat;
        }

        $UpdateDetails = array(
            'name' => $request->name,
            'category' => $request->category,
            'yob' => $request->yob,
            'county' => $request->county,
            'subcounty' => $request->subcounty,
            'phone' => $request->phone,
            'email' => $request->email,
            'retirement' => $request->retirement,
            'service_number' => $request->service_number,
            'passport' => $passport,
            'identity' => $identity,
            'military_id' => $military_id,
        );
        $id = $request->id;
        DB::table('memberships')->where('id',$id)->update($UpdateDetails);
        Session::flash('message', "Changes Have Been Saved");

        return Redirect::back();
    }


}
