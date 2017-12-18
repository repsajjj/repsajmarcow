<?php

namespace App\Http\Controllers;
use Mail;

class AboutController extends Controller {

    public function create()
    {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {
  
        Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('info@repsajmarcow.be');
        $message->to('info@repsajmarcow.be', 'Info')->subject('R&M Feedback');
    });


      return redirect('/contact')
        ->with('message', 'Thanks for contacting us!');
  
    }

}