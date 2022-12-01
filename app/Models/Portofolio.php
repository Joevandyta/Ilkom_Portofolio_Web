<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $table = 'portofolio';
    protected $fillable = [
        'portofolio_name',
        'category',
        'point',
        'organizer',
        'certificate',
        'date',
    ];
}
