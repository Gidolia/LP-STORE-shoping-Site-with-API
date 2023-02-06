<?php
include "../database_connect.php";

$ro="SELECT * FROM `order_bill_detail` WHERE `mobile`='$_POST[mobile]' AND `obd_id`='$_POST[obd_id]';";
$dc=$con->query($ro);
     if($dc->num_rows=='1')
     {

    $rtpr="UPDATE `order_bill_detail` SET `status` = '$_POST[status]' WHERE `order_bill_detail`.`obd_id` = '$_POST[obd_id]';";
     if($con->query($rtpr)===TRUE )
        {
            $response[] = array("check"=>1);
        }
        else{
            $response[] = array("check"=>0);
        }
    
    }else{ 
    $response[] = array("check"=>2);
}
 echo (json_encode($response));
?>