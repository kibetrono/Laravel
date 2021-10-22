<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
class EmailController extends Controller
{
    //
    public function index(){
        return view('homepage5');
    }
    public function send(Request $request){
        $this->validate($request, [
            'emailaddress'  =>  'required|email',
            'textAreaMessage' =>  'required'
           ]);
           $data = array(
            'emailaddress'      =>  $request->emailaddress,
            'textAreaMessage'   =>   $request->textAreaMessage
        );
       \Mail::to('kibetdavidro@gmail.com')->send(new SendMail($data));
       return back()->with('success', 'Thanks for contacting us!');
    }
    public function contact(){
        return view('contactUs');
    }
    
}
