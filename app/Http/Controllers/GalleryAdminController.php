<?php

namespace App\Http\Controllers;

use App\Gallery;

class GalleryAdminController extends Controller
{
    /**
     * Load the interface with the Gallery.vue empty component.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery');
    }

    //Vue api

    /**
     * Gallery.vue request endpoint that sets the component initial state.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function initialState()
    {
        return Gallery::orderBy('order')->get();
    }

    /**
     * Update gallery itens.
     *
     * @return \Illuminate\Http\JsonResponse (json request/response)
     */
    public function updateOrder()
    {
        $itens = request('itens');

        (new Gallery())->updateOrder($itens);

        return ['status' => true];
    }
}
