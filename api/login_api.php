<?php
include "../database_connect.php";

$ro="SELECT * FROM `costumer` WHERE `mobile`='$_POST[mobile]' AND `password`='$_POST[password]';";
$dc=$con->query($ro);
     if($dc->num_rows=='1')
     {
         $fetch=$dc->fetch_assoc();
         $response[]=$fetch;
        
     }else{
     $response[] = array("check"=>0);
      
     }
     
     echo (json_encode($response));
     
     /*
     $ro="SELECT * FROM `costumer` WHERE `mobile`='$_POST[mobile]' AND `password`='$_POST[password]';";
$dc=$con->query($ro);
     if($dc->num_rows=='1')
     {
         $response['check'] = "1";
        
     }else{
        $response['check'] = "0";
     }
     
     echo (json_encode($response));
     */
     
?>