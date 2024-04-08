<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Team extends Model
{
    use AsSource, Attachable;

    /**
     * @var array
     */
    protected $table = 'teams';
    protected $fillable = [

        'img',
        'name',
        'position',
        // 'desc',

    ];
}
