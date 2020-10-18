<?php 
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    switch (@$_GET['mod']){
        case 'tamu':
            include_once 'controller/tamu.php';
            break;
        default:
        include_once 'controller/tamu.php';
    }
}else{
    include_once 'controller/c_login.php';
}
?>
