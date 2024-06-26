<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Filters\Types\Like;

use App\Models\User;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Placed extends Model
{
    use AsSource, Attachable, Filterable, HasSlug;
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'body',

        'hero',
    ];


    /**
     * Name of columns to which HTTP sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];

    protected $allowedFilters = [
        'title' => Like::class,
    ];


    // public function attachments()
    // {
    //     return $this->hasMany(Attachment::class, 'post_id');
    // }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title') // change 'title' to the column you want to use as a basis for the slug
            ->saveSlugsTo('slug');
    }


}
