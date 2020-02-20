<?php

namespace DesignByCode\Sluggable\Traits;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


trait Sluggable
{


    /**
     * [bootSluggable description]
     * @return [type] [description]
     */
    public static function bootSluggable()
    {
        
        static::creating(function(Model $model) {
            $model->slug = Str::slug($model->name);
        });

        static::updating(function(Model $model) {
            $model->slug = Str::slug($model->name);
        });
    }




}
