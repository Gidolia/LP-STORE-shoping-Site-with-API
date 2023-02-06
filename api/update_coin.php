<?php
include "../database_connect.php";

$ro="SELECT * FROM `costumer` WHERE `mobile`='$_POST[mobile]';";
$dc=$con->query($ro);
     if($dc->num_rows=='1')
     {

    $rtpr="UPDATE `costumer` SET `coin` = '$_POST[coin]' WHERE `costumer`.`mobile` = '$_POST[mobile]';";
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