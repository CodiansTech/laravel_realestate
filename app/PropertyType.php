<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table = 'propertytypes';
    public function properties(){
        return $this->hasMany('App\Property');
    }
}
