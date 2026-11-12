<?php

// use App\Models\Manager;
// use Illuminate\Support\Facades\Auth;

use App\Models\Manager;

function FetchStatus (string $status){
    switch ($status) {
        case 'active':
            return 'فعال';
        case 'inactive':
            return 'غیرفعال';
        case 'unavailable':
            return 'ناموجود';
        case 'stop_selling':
            return 'توقف فروش';
        case'suspend':
            return 'مسدود';    
        case 'success':
            return 'موفق';
        case 'failed':
            return 'ناموفق';
        default:
            return "نامشخص";
    }
}

function FetchLevel(string $level){
    switch ($level){
        case 'manager':
            return 'مدیر';
        case 'operator':
            return 'اپراتور';    
    }
}

function generateRandomDigit ($length = 8):int
{
    $intMin = (10 ** $length) / 10; // 100...
    $intMax = (10 ** $length) - 1;  // 999...

    $codeRandom = mt_rand($intMin, $intMax);

    return $codeRandom;
}

function priceFormatter(int $price) {
    return number_format($price) . ' تومان';
}

function getpercent(array $value){
    if ($value['price']==0 || $value['price_discounted']==0){
        return false;
    }
    return round( (($value['price']-$value['price_discounted']) / $value['price_discounted']) * 100 );
}

function getPhoto(int $id){
    
    $manager = Manager::find($id,'id');
    $photo = $manager->photo()->first();

    if(empty($photo)){
        return 'admin_assets/media/users/blank.png';
    }else{
        return $photo->src;
    }
    
}

function ChangeStatus(string $status){
    $status = $status === 'active' ? 'inactive' : 'active';
    return $status;
}
