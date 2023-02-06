<?php
include "../database_connect.php";


       $reg="INSERT INTO `order_bill_detail` (`obd_id`, `ob_id`, `p_id`, `mrp`, `dp`, `price`, `qty`,`mobile`,`discount`,`status`,`qty_price`) 
       VALUES ('$_POST[obd_id]','$_POST[ob_id]', '$_POST[p_id]', '$_POST[mrp]', '$_POST[dp]', '$_POST[price]', '$_POST[qty]','$_POST[mobile]','$_POST[discount]','$_POST[status]','$_POST[qty_price]');";

       if($con->query($reg)===TRUE )
        {
            $response['message']="Your order has been completely Successfully...";
        }
        else{
             $response['message']="Your Registration Failed ! Please Try Again";
        }
    
    
   echo (json_encode($response));
    
        
?>