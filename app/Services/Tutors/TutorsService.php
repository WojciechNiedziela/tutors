<?php

namespace App\Services\Tutors;

use App\Models\Tutors\Tutor;

class TutorsService
{

    public Tutor $tutorModel;

    public function __construct(Tutor $tutorModel)
    {
        $this->tutorModel = $tutorModel;
    }

    public function list($name, $lastName, $subject)
    {
        return $this->tutorModel->filterByName($name)->filterByLastName($lastName)->filterBySubject($subject)->get();
    }

}