<?php
include "../database_connect.php";

$de="SELECT * FROM `product` WHERE `p_id`='$_GET[p_id]'";
$dc=$con->query($de);
     
     while($fetch=$dc->fetch_assoc()){
         $data[]=$fetch;
     }
     echo (json_encode($data));
?>