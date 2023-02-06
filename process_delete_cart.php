<?php
include "database_connect.php";

$rfp="DELETE FROM `product_cart` WHERE `product_cart`.`pc_id` = '$_GET[pc_id]'";
if($con->query($rfp)===TRUE)
{
    echo "<script>alert('Product Deleted From Cart');location.href='shoping-cart.php';</script>";
}
else{
    echo "<script>alert('Failed Plz Try Again');location.href='shoping-cart.php';</script>";
}