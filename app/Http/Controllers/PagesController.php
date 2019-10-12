<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showAbout(){
    	return view('Pages.about');
    }

    public function Courses(){
    	return view('Pages.courses');
    }

     public function Events(){
        return view('Pages.events');
    }

    public function Gallery(){
        
    }

    public function Videos(){
        return view('Pages.videos');
    }

    public function Photos(){
        return view('Pages.photos');
    }

    public function addContacts(){
    	return view('Pages.contacts');
    }

    public function Contacts(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $subject = $request->subject;
        $message = $request->message;
        Contact::create(['name'=>$name, 'email'=>$email, 'phone_number'=>$phone_number, 'subject'=>$subject, 'message'=>$message]);
        return redirect('/');
    }

}
