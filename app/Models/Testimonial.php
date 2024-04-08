<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use App\Models\Testimonial;
use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;

class Testimonial extends Model
{
    use HasFactory, AsSource, Attachable;


    protected $table = 'testimonials';


    protected $fillable = [
        'content',
        'image',
        'name',
        'designation',



    ];
//     public function course()
// {
//     return $this->belongsTo(Course::class,'title','coursename');
// }

//     public function category()
// {
//     return $this->belongsTo(Category::class,'categoryname','name');
// }

}
