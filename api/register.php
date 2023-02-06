<?php
include "../database_connect.php";


       $reg="INSERT INTO `costumer` (`c_id`, `name`, `mobile`, `password`, `email`, `addreass`, `city`, `state`, `dob`, `status`, `r_date`, `r_time`, `check`) VALUES (NULL, '$_POST[name]', '$_POST[mobile]', '$_POST[password]', '$_POST[email]', '$_POST[addreass]', '', '', '', '', '$date', '$time', '1');";

       if($con->query($reg)===TRUE )
        {
            $response['message']="Your Registration Successfully...";
        }
        else{
             $response['message']="Your Registration Failed ! Please Try Again";
        }
    
    
   echo (json_encode($response));
    
        
?>