<?php
include "../database_connect.php";

$fo="SELECT * FROM `product_cart` WHERE `mobile`='$_POST[mobile]' AND `p_id`='$_POST[p_id]'";
$dp=$con->query($fo);
$fet=$dp->fetch_assoc();

$rfrfrf="DELETE FROM `product_cart` WHERE `product_cart`.`pc_id` = '$fet[pc_id]'";
if($con->query($rfrfrf)===TRUE )
        {
            $response['message']="Deleted Successfully";
        }
        else{
             $response['message']="Sorry Some Problem Occour";
        }
?>