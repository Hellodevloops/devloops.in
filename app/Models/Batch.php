<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
class Batch extends Model
{
    use AsSource, Attachable;

    /**
     * @var array
     */
    protected $table = 'batchs';
    protected $fillable = [
        'title','hero'

    ];
}
