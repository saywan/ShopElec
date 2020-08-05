<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $table='orders';
    public  $timestamps=true;

    public  function  users(){
        return $this->belongsTo('App\User');
    }

}
