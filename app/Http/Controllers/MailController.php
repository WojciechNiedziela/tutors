<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'tytul maila',
            'body' => 'tresc maila (body)'
        ];
        Mail::to("testowy.email.laravel@gmail.com")->send(new TestMail($details));
        return "Email wysłany";
    }
}
