<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_id',
        'comment',
        'student_id',
        'teacher_id',
        'mark',
        'answer',
        'answer_file_id',
        'lesson_id',
        'status',
    ];

    public function file(): BelongsTo {
        return $this->belongsTo(File::class);
    }

    public function student(): BelongsTo {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function answer_file(): BelongsTo {
        return $this->belongsTo(File::class, 'answer_file_id', 'id');
    }

    public function lesson(): BelongsTo {
        return $this->belongsTo(Lesson::class);
    }
}
