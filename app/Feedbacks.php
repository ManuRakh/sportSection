<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    protected $fillable = [
        'fname','phone', 'email', 'datetoday','fitnessprogrammid'
    ];
}
