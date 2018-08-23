<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Gallery;

class GalleryOrderTest extends TestCase
{
    use RefreshDatabase;

    // admin tests

    /** @test */
    public function a_guest_can_not_access_the_gallery_itens_route()
    {
        $this->get('/admin/gallery')
        ->assertRedirect('/login');
    }

    /** @test */
    public function an_admin_can_access_the_gallery_itens_route()
    {
        $this->signIn();

        $this->get('/admin/gallery')
        ->assertStatus(200);
    }

    /** @test */
    public function a_guest_can_not_access_the_gallery_fetch_itens_route()
    {
        $this->json('get', '/api/gallery-initial-state')
        ->assertStatus(401);
    }

    /** @test */
    public function gallery_itens_are_fetched_correctly()
    {
        $this->signIn();

        $itens = create('App\Gallery', [], 3);

        $response = $this->json('get', '/api/gallery-initial-state');

        $response->assertJson($itens->toArray());
    }

    /** @test */
    public function a_guest_can_not_reorder_gallery_itens()
    {
        $this->json('post', '/api/gallery-update-order', ['itens' => []])
        ->assertStatus(401);
    }

    /** @test */
    public function an_admin_can_reorder_gallery_itens()
    {
        $this->signIn();

        $this->json('post', '/api/gallery-update-order', ['itens' => []])
        ->assertStatus(200);
    }

    /** @test */
    public function it_reorders_gallery_itens()
    {
        $itens = create('App\Gallery', [], 3);

        $reverse = $itens->reverse()->toArray();

        (new Gallery())->updateOrder($reverse);

        $ordered = Gallery::orderBy('order')->get()->toArray();

        foreach ($ordered as $i => $item) {
            $this->assertEquals($item['id'], $reverse[$i]['id']);
        }
    }
}
