<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
class Career extends Model
{
    use HasFactory , AsSource;

    protected $fillable = [
        'title',
        'location',
        'content'
        // 'status'
    ];
}
