<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class support extends Model
{
    use HasFactory;
    protected $fillab =[
        'first_name',
        'last_name',
        'address',
        'phone',
        'question_one',
        'question_two',
        'question_three',
        'question_four',
        'cv',
    ];
}
