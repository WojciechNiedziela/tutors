<?php

namespace App\Http\Controllers\Tutors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class TutorController extends Controller
{
    public function details($id)
    {
        $tutor = DB::table('tutors')->find($id);
        return view('tutors.details', ['tutor' => $tutor]);
    }
}
