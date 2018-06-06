<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StoredItem extends Model
{
    public $productId;
    public $qty = 0;

        public function __construct($productId, $qty) {
        $this->productId = $productId;
        $this->qty = $qty;
    }
}
