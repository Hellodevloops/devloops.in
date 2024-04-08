<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Post extends Model
{
    use HasFactory, HasSlug;
    use AsSource;


    protected $fillable = [
        'title',
        'hero',
        // 'description',
        'body',
        'author',
        'slug'

    ];

    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];

    protected $allowedFilters = [
        'title' => Like::class,
    ];

    public function author_name()
    {
        return $this->belongsTo(User::class, 'author');
    }
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title') // change 'title' to the column you want to use as a basis for the slug
            ->saveSlugsTo('slug');
    }
}
