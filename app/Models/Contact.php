<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Contact extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'message',

    ];
}
