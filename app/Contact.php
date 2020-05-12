<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable=[
        'Name',
        'Email',
        'Subject',
        'Message',
    ];
}
