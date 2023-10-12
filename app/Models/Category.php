<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Category extends Model implements HasMedia
{
    use HasFactory,HasTranslations,InteractsWithMedia;

    protected $translatable=['name','slug'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image');
        $this->addMediaConversion('optimize')->quality(50);
    }
}
