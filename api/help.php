<?php
include "../database_connect.php";


       $reg="INSERT INTO `help` (`h_id`, `obd_id`, `mobile`, `h_desc`, `c_mobile`) VALUES (NULL, '$_POST[obd_id]', '$_POST[mobile]', '$_POST[h_desc]', '$_POST[c_mobile]');";

       if($con->query($reg)===TRUE )
        {
            $response['message']="Information Send Successfully... Our Team Contact You Soon... ";
        }
        else{
             $response['message']="Failed ! Please Try Again";
        }
    
    
   echo (json_encode($response));
    
        
?>