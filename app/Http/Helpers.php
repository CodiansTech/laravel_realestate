<?php
    use App\Property;
    use App\Setting;

    function getUnapprovedProperties(){
        $properties = Property::where('approved', false)->get();
        $count = $properties->count();
        if($count > 0)
            return '<label class="label label-danger" style="font-size:10px">'.$count.'</label>';
        else 
            return;
    }

    function getEmail(){
        $email = Setting::where('name', 'email')->first();
        return $email->value;
    }

    function getAddress(){
        $address = Setting::where('name', 'address')->first();
        return $address->value;
    }

    function getPhone(){
        $phone = Setting::where('name', 'phone')->first();
        return $phone->value;
    }
?>