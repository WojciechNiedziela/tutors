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


}