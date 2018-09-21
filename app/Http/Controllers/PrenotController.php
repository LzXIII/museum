<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class PrenotController extends Controller
{
    function contatti(Request $request)
    {
          $this->validate($request, [
          'f_name' =>'required',
          'l_name' =>'required',
          'email' =>'required|email',
          'phone' =>'required',
          'g-recaptcha' => 'required|captcha',
          ]);
          $request->input;
          $message= new Message;
          $message->f_name=$request->input('f_name');
          $message->l_name=$request->input('l_name');
          $message->email=$request->input('email');
          $message->phone=$request->input('phone');
          $message->message=$request->input('message');
          $message->save;
          return redirect()->back();
    }
}
