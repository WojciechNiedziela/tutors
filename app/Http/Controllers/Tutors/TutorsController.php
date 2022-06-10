<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Tutors\TutorsService;

class TutorsController extends Controller
{

    public TutorsService $tutorsService;

    public function __construct(TutorsService $tutorsService)
    {
        $this->tutorsService = $tutorsService;
    }

    public function list(Request $request)
    {
        $name = $request->get('name');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $phoneNumber = $request->get('phoneNumber');
        $subject=$request->get('subject');
        $grade = $request->get('grade');
        $education = $request->get('education');
        $experience = $request->get('experience');
        // $tutors = DB::table('tutors')->where('name','like', '%'. $name . '%')->where('lastName','like', '%'. $lastName . '%')
        // ->where('email','like', '%'. $email . '%')->where('phoneNumber','like', '%'. $phoneNumber . '%')
        // ->where('subject','like', '%'. $subject . '%')->where('grade','like', '%'. $grade . '%')->where('education','like', '%'. $education . '%')
        // ->where('experience','like', '%'. $experience . '%')->get();
       $tutors = $this->tutorsService->list($name, $lastName, $email, $phoneNumber, $subject, $grade, $education, $experience);
        return view('tutors.list', ['tutors' => $tutors]);
    }
}
