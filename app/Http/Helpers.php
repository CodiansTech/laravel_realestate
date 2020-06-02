<?php
use App\Property;

function getUnapprovedProperties(){
    $properties = Property::where('approved', false)->get();
    $count = $properties->count();
    if($count > 0)
        return '<label class="label label-danger" style="font-size:10px">'.$count.'</label>';
    else 
        return;
}

?>