<?php
/**
 * chuyển mảng trong php thành json
 */

$mang1 = [
    ["ten"=> "hà nội","gpd"=>"1 tỉ USD"],
    ["ten"=> "sơn la","gpd"=>"10 tỉ USD"],
    ["ten"=> "hồ chí minh","gpd"=>"20 tỉ USD"],

];

$json1 = json_encode($mang1);

echo "<pre>";
print_r($mang1);
echo "</pre>";

echo "<pre>";
print_r($json1);
echo "</pre>";
