<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender_id',
        'name',
        'author',
        'registration_number',
        'situation'
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}
