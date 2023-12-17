<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'plan',
        'price',
        'duration', // in days
        'short_description',
        'description',
        'image_id',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function courseUser(): HasMany
    {
        return $this->hasMany(CourseUser::class);
    }

    public function myBue(): HasOne
    {
        return $this->hasOne(CourseUser::class)->where('user_id', auth()?->id());
    }
}
