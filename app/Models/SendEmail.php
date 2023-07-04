<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class SendEmail extends Model
{
    use HasFactory;
    public static function SendNotfication($MemberEmail,$Number,$MemberName){
        $Joiner = "Dear Veteran, Your Membership Number has been Generated successfully.";
        $data = array(
            'number'=>$Number,
        );
        $subject = "Kenya Veterans for Peace Membership Number";

        $FromVariable = "ourveterans.ke@gmail.com";
        $FromVariableName = "Kenya Veterans for Peace";

        $toVariable = $MemberEmail;

        $email = "info@veterans.or.ke";

        $toVariableName = $MemberName;

        Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName,$email){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->replyto($email)->subject($subject);
        });
    }
}
