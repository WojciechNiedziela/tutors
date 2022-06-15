<?php

namespace App\Http\Controllers\Tutors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Services\Tutors\TutorService;

class TutorController extends Controller
{

    public TutorService $tutorService;

    public function __construct(TutorService $tutorService)
    {
        $this->tutorService = $tutorService;
    }

    public function show($id)
    {
        $tutor = $this->tutorService->show($id);
        return view('tutors.show', ['tutor' => $tutor]);
    }

    public function getCreateView()
    {
        return view('tutors.create');
    }

    public function create(Request $request)
    {
        $tutor = $request->all();
        $this->tutorService->create($tutor);
        return redirect()->route('create');
    }

    public function getUpdateView($id)
    {
        $tutor = $this->tutorService->show($id);
        return view('tutors.update', ['tutor' => $tutor]);
    }

    public function update($id, Request $request)
    {
        $newTutor = $request->all();
        $this->tutorService->update($id, $newTutor);
        return redirect()->route('list');
    }

    public function destroy($id)
    {
        $this->tutorService->destroy($id);
        return redirect()->route('list');
    }

    public function sendEmail($id)
    {
        
    }

    
}
