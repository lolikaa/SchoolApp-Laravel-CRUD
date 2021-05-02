<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'surname', 'subject','salary', 'form_of_employment', 'employment_date','deemployment_date','adress','telephone','email'
    ];
}
