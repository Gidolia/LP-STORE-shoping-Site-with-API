<?php
include "../database_connect.php";


       $reg="INSERT INTO `order_bill` (`ob_id`, `mobile`, `calling_no`, `name`, `email`, `addreass`, `city`, `state`, `pin_code`, `price`, `status`) 
       VALUES ('$_POST[ob_id]', '$_POST[mobile]', '$_POST[calling_no]', '$_POST[name]', '$_POST[email]', '$_POST[addreass]', '$_POST[city]', '$_POST[state]', '$_POST[pincode]', '$_POST[price]', '$_POST[status]');";

       if($con->query($reg)===TRUE )
        {
            $response['message']="Your order has been completely Successfully...";
        }
        else{
             $response['message']="Your Registration Failed ! Please Try Again";
        }
    
    
   echo (json_encode($response));
    
        
?>