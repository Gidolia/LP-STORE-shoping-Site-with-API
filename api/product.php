<?php
include "../database_connect.php";

$de="SELECT * FROM `product`";
$dc=$con->query($de);
     
     while($fetch=$dc->fetch_assoc()){
         $data[]=$fetch;
     }
     echo (json_encode($data));
?>