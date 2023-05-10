<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function index() {

        $data = [
            'subject' => 'Sample Email Subject', 
            'body' => 'Sample Email Body'
        ];

        try{
            Mail::to('eskolar.se@gmail.com')->send(new SendMail($data));
            return response()->json(['Great check you mailbox']);
        }
        catch(Exception $th) {
            return response()->json(['Sorry an error occored.']);

        }
    }
}
