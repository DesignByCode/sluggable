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
            $model->createSlug();
        });

        static::updating(function(Model $model) {
            $model->createSlug();
        });

    }


    /**
     * @return mixed
     */
    public function createSlug()
    {
        return $this->setAttribute('slug', Str::slug($this->getSlugFromField()));
    }


    /**
     * @return mixed
     */
    public function getSlugFromField()
    {
        return $this->getAttribute($this->slugFrom());
    }


    /**
     * @return string
     */
    public function slugFrom()
    {
        return 'name';
    }



}
