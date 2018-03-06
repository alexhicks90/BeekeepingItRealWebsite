<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contactmail;

class ContactController extends Controller
{
    public function index() {
        return view('contact/index');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        $data = [
            'name' => request()->name,
            'subject' => request()->subject,
            'email' => request()->email,
            'message' => request()->message
        ];
    
        \Mail::to('ahicks090@gmail.com')->send(new Contactmail($data));

        return redirect('/contact')->with('status', 'Thank you for contacting us! We will do our best to get back to you in a timely manner :)');;

    }
}
