<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClaimForm extends Model
{
    public function product(){
        return $this->belongsTo(ProductDetail::class, 'product_id');
    }
}
