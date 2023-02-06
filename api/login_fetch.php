<?php
include "../database_connect.php";

$ro="SELECT * FROM `costumer` WHERE `mobile`='$_POST[mobile]' AND `password`='$_POST[password]';";

$dc=$con->query($ro);
     
     $fetch=$dc->fetch_assoc();
         $data[]=$fetch;
     
     echo (json_encode($data));
?>