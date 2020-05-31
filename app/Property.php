<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    public function images(){
        return $this->hasMany('App\Image');
    }

    public function getStatus(){
        if($this->status == 0)
            return 'Sale';
        return 'Rent';
    }
}
