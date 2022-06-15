<?php

namespace App\Services\Tutors;

use App\Models\Tutors\Tutor;

class TutorService
{

    public Tutor $tutorModel;

    public function __construct(Tutor $tutorModel)
    {
        $this->tutorModel = $tutorModel;
    }

    public function show($id)
    {
        return $this->tutorModel->find($id);
    }

    public function create($tutor)
    {
        $this->tutorModel::create($tutor);
    }

    public function update($id, $newTutor)
    {
        $tutor = $this->show($id);
        $tutor->update($newTutor);
    }

    public function destroy($id)
    {
        return $this->tutorModel->destroy($id);
    }

    public function sendEmail($id)
    {
        $tutor = $this->tutorModel->find($id);
    }

}