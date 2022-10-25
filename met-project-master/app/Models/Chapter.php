<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_id',
        'author_id',
        'description',
        'theme_num',
        'slug',
        'introductions',
        'media_src',
        'summary',
        'pdf_src',
        'exercise_data',
        'exercise_config',
        'status'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
