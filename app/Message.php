<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $message = 'message';
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];
}
