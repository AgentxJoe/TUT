<?php 
$path_folder='TUT';
$system_title='Mold History Management System';
$js_version='';
$v = 'TUT v1.0.0000';
$SN = 'TUT'; 
$length = 4;
// function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $js_version = $randomString;
// }


?>

