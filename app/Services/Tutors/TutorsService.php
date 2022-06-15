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

    public function list($name, $email, $phoneNumber, $subject, $grade, $education, $experience)
    {
        return $this->tutorModel->filterByName($name)->filterByEmail($email)->filterByPhoneNumber($phoneNumber)
        ->filterBySubject($subject)->filterByGrade($grade)->filterByEducation($education)->filterByExperience($experience)->get();
        // return $this->tutorModel->filterByName($name)
    }

}