<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'birth_date', 'age', 'photo', 'gender', 'class', 'batch', 'os', 'ip'];
}
