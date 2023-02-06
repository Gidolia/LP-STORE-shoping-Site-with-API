<?php
include "../database_connect.php";

$ro="SELECT * FROM `costumer` WHERE `mobile`='$_POST[mobile]' AND `password`='$_POST[c_password]';";
$dc=$con->query($ro);
     if($dc->num_rows=='1')
     {

    $rtpr="UPDATE `costumer` SET `password` = '$_POST[new_password]' WHERE `costumer`.`mobile` = '$_POST[mobile]';";
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