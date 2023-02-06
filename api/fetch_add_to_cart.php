<?php
include "../database_connect.php";

$ro="SELECT * FROM `product_cart` WHERE `c_mob`='7869470415';";

$dc=$con->query($ro);
     
     while($fetch=$dc->fetch_assoc())
     {
         $rty="SELECT * FROM `product` WHERE `p_id`='$fetch[p_id]'";
         $dfg=$con->query($rty);
         $lmk=$dfg->fetch_assoc();
         $data[] = array("name"=>"$lmk[name]", "mrp"=>"$lmk[mrp]", "qty"=>"$lmk[qty]");
         
     }
     
     echo (json_encode($data));
?>

