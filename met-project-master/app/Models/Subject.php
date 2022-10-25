<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'class',
        'label',
        'type', // Must be numeric : 1 - "hatmi", 2 - "olimpiada", 3 - mmt , 4 - ilovagi
        'slug',
        'images',
        'status'
    ];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

}
