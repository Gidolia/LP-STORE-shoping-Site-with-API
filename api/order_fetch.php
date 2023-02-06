<?php
include "../database_connect.php";

$de="SELECT * FROM `order_bill_detail`";
$dc=$con->query($de);
     
     while($fetch=$dc->fetch_assoc()){
         $data[]=$fetch;
     }
     echo (json_encode($data));
?>