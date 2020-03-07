<?php

namespace DesignByCode\Sluggable\Tests\Stubs;

use DesignByCode\Sluggable\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PostStub extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'content'];

    protected $connection = "testbench";

    protected $table = "posts";

    /**
     * @return string
     */
    public function slugFrom()
    {
        return 'name';
    }

}
