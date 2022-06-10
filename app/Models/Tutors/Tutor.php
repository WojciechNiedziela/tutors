<?php

namespace App\Models\Tutors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    public function scopeFilterByName($query, $name)
    {
        return $query->where('name','like', '%'. $name . '%');
    }
    public function scopeFilterByLastName($query, $lastName)
    {
        return $query->where('lastName','like', '%'. $lastName . '%');
    }
    public function scopeFilterByEmail($query, $email)
    {
        return $query->where('email','like', '%'. $email . '%');
    }
    public function scopeFilterByPhoneNumber($query, $phoneNumber)
    {
        return $query->where('phoneNumber','like', '%'. $phoneNumber . '%');
    }
    public function scopeFilterBySubject($query, $subject)
    {
        return $query->where('subject','like', '%'. $subject . '%');
    }
    public function scopeFilterByGrade($query, $grade)
    {
        return $query->where('grade','like', '%'. $grade . '%');
    }
    public function scopeFilterByeducation($query, $education)
    {
        return $query->where('education','like', '%'. $education . '%');
    }
    public function scopeFilterByExperience($query, $experience)
    {
        return $query->where('experience','like', '%'. $experience . '%');
    }

}
