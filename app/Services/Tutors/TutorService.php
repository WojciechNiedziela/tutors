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

    public function details($id)
    {
        return $this->tutorModel->find($id);
    }

    public function create($tutor)
    {
        $this->tutorModel::create($tutor);
    }

    public function update($id, $newTutor)
    {
        $tutor = $this->details($id);
        $tutor->update($newTutor);
    }

    public function destroy($id)
    {
        return $this->tutorModel->destroy($id);

    }


}