<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'difficulty_level',
        'price'
    ];

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
