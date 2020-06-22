<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    
    public function images(){
        return $this->allimages()->where('type', 'gallery');
    }

    public function allimages(){
        return $this->hasMany('App\Image');
    }

     public function floorplanimages(){
        return $this->allimages()->where('type', 'floorplan');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function propertytype(){
        return $this->belongsTo('App\PropertyType');
    }

    public function getStatus(){
        if($this->status == 0)
            return 'Sale';
        return 'Rent';
    }

    public function isApproved(){
        if($this->approved)
            return true;
        return false;
    }

    public function getFeaturedImage(){
        return $this->featuredimage;
    }

    public function users(){
        return $this->belongsToMany('App\User', 'bookmarks');
    }

    public function getFeaturedImageURL(){
        if($this->featuredimage != null)
            return 'images/property/'.$this->images()->where('id', $this->featuredimage)->first()->filename;
        return 'assets/img/properties/property-09.jpg';
        // return $this->hasOne('App\Image', 'id', $this->featuredimage);
    }

    public function getPrice(){
        return number_format($this->price);
    }
}
