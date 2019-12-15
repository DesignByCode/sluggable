<?php

namespace DesignByCode\Sluggable\Traits;

use Illuminate\Support\Str;


trait Sluggable
{

    // abstract public function sluggables();


    public static function bootSluggable()
    {

        static::creating(function($model) {
            $model->slug = Str::slug($model->name);
        });

        static::updating(function($model) {
            $model->slug = Str::slug($model->name);
        });
    }




}
