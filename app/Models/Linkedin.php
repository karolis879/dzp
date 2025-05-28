<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Linkedin extends Model
{
    protected $table = 'linkedin';

    protected $fillable = [
        'description',
        'image',
        'published_at',
        'post_id'
    ];

    public $timestamps = true;
}
