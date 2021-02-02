<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Tag;

class TagTest extends TestCase
{
    public function test_slug()
    {
        $tag = new Tag;
        $tag->name = 'Tag TDD Laravel 8';

        $this->assertEquals('tag-tdd-laravel-8', $tag->slug);
    }
}
