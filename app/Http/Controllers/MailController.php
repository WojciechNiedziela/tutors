<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mail as TeacherMail;
use App\Services\Tutors\TutorService;


class MailController extends Controller
{
    public TutorService $tutorService;

    public function __construct(TutorService $tutorService)
    {
        $this->tutorService = $tutorService;
    }

    public function sendEmail(Request $request)
    {
        $name = $request->get('name');
        $username = $request->get('username');
        $title = $request->get('title');
        $message = $request->get('message');
        $emailAdress = $request->get('email');

        $details = [
            'title' => $title,
            'body' => $message,
            'username' => $username
        ];
        Mail::to($emailAdress)->send(new TeacherMail($details));
        return redirect()->route('tutors.list');

    }

    public function SendEmailView($id)
    {
        $tutor = $this->tutorService->show($id);

        return view('email.sendEmailView', ['name' => $tutor->name, 'email' => $tutor->email]);
    }
    
}
