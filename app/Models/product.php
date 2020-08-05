<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class product extends Model
{
    protected $table="product";
    public  $timestamps=false;
    public  $fillable=['pimage'];

    public function  Categorys(){
        return $this->hasOne(category::class);
    }
}
