<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Slider extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,HasTranslations;


    protected $translatable=['title','sub_title','description','button_url','button_text'];
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')->singleFile();
    }

}
