<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class category extends Model
{
    protected $table="category";
    public $timestamps=false;

    public function Products(){
        return $this->belongsTo(product::class);
    }
}
