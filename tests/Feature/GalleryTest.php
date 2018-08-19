<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GalleryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_lists_the_gallery_itens_correctly()
    {
        $itens = create('App\Gallery', [], 2);

        $this->get('/')
        ->assertStatus(200)
        ->assertSee($itens->first()->title)
        ->assertSee($itens->last()->title);
    }
}
