<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Mail;
use App\mail\NewUserVerification;
use Carbon\Carbon;

class SendMailController extends Controller
{
    /**
     * Show the application sendMail.
     *
     * @return \Illuminate\Http\Response
     */

    public function sendMail()
    {
    	$content = [
    		'title'=>  'Hello, '.Auth::User()->name,
            'body'=> 'To download your check stubs , please click following link',
            'body2'=> 'Your stubs will be available for 36 hours. Please download, save or print your stubs for future access!!',
            'body3'=> 'Were you happy with our service? Let us know by leaving a review at the link below. Thanks',
            'button' => 'Download Here',
            'button2' => 'Leave A Review',
            'date' => Carbon::now()
        ];


    	$receiverAddress = Auth::User()->email;


    	Mail::to($receiverAddress)->send(new NewUserVerification($content));

        return redirect('/');
    	//dd('mail send successfully');
    }
}
