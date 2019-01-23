<?php

namespace App\Http\Controllers;
use App\mail\createEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
       return view('pages.contact');
    }
    public function store(Request $request){
       $this->validate($request,[
            "name"=>"required|min:3",
            "email"=>"required|email",
            "msg"=> "required|min:10"
       ]);
       $mail = new createEmail($request->name,$request->email,$request->msg);
         Mail::to('laracarte@gmail.com')->send($mail);
         return "Done !";
     }
}
