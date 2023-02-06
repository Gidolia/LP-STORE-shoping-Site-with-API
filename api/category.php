<?php
include "../database_connect.php";
$de="SELECT * FROM `category`";
$dc=$con->query($de);
     
     while($fetch=$dc->fetch_assoc()){
         
         $data[]=array("id"=>"$fetch[id]", "name"=>"$fetch[name]", "image"=>"$fetch[image]", "unq_id"=>"$fetch[unq_id]", "c_id"=>"$fetch[c_id]");
     }
     echo (json_encode($data));
?>