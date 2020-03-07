<?php

namespace DesignByCode\Sluggable\Tests\Feature;

use DesignByCode\Sluggable\Tests\Stubs\PostStub;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DesignByCode\Sluggable\Tests\TestCase;


class ExampleTest extends TestCase
{

    protected $post;

    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function see_sluggable_string_after_created()
    {
        $this->createPost('Claude Myburgh');

        $this->assertEquals($this->post->slug, 'claude-myburgh');
    }

    /** @test */
    public function see_sluggable_string_after_saving()
    {
        $post = new PostStub;
        $post->name = "Claude Myburgh";
        $post->save();

        $this->assertEquals($post->slug, 'claude-myburgh');
    }

    /**
     * Create a post
     * @param $value
     */
    private function createPost($value)
    {
        $this->post = PostStub::create([
            'name' => $value
        ]);
    }

}
