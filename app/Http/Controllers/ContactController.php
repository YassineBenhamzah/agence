<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function sendemail(Request $request){
        //validation
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'typeservice' => $request->typeservice,
            'message' => $request->message,
        ];
           Mail::to('nemoty.ney2018@hotmail.com')->send(new ContactMail($data));
          /*  return  'thanks for reaching out'; */
          return Redirect()->back();
    }
}
