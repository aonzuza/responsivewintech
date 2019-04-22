<?php

use App\Models\Product;
use App\Models\Productgroup;



$groupIDs = '30,31';
$groupIDs = explode(',',$groupIDs);

$group= Productgroup::whereIn('ID',$groupIDs)->where('headerimg','<>','')->first();
// $headerImg = $group[1]->headerimg;


print($group);

 ?>
