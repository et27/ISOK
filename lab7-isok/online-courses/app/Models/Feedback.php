<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';

    protected $fillable = [
        'course_id',
        'author_name',
        'comment',
        'score',
        'status'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
