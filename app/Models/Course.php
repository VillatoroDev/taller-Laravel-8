<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* CAMPO VIRTUAL */
    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 80) . "...";
    }
}
