<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class MailController extends Controller
{
    public function submit(ContactRequest $request) {
        Mail::to('eskolar.se@gmail.com')->send(new ContactMail($request->name, $request->email, $request->message_subject, $request->content));
        // return to_route('contact');
        return redirect('/contact');
    }
}
