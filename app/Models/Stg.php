<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stg extends Model
{
    use HasFactory;
    protected $table = 'stgs';
    protected $fillable = [
    'cin',
    'nom',
    'prenom',
    'age',
    'speciality'
];
}
