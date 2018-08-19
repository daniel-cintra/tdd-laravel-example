<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'galleries';

    /**
     * Faz o update da ordenação dos temas.
     */
    public function updateOrder(array $itens)
    {
        foreach ($itens as $index => $item) {
            $this->where('id', $item['id'])
            ->update(['order' => $index]);
        }
    }
}
