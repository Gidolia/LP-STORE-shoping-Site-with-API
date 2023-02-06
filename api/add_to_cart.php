<?php
include "../database_connect.php";

    ///////////////////////////////fetching Product Detail
    $re="SELECT * FROM `product` WHERE `p_id`='$_POST[p_id]'";
    $dcr=$con->query($re);
    $pro_fet=$dcr->fetch_assoc();
    
    ////////////////////////////fetching shoping cart
    $ca_sel="SELECT * FROM `product_cart` WHERE `p_id`='$_POST[p_id]' AND `c_mob`='$_SESSION[mobile]'";
    $ca_que=$con->query($ca_sel);
    if($ca_que->num_rows>0){
        $ca_fet=$ca_que->fetch_assoc();
        $new_qty=$ca_fet[qty]+$_POST[qty];
        $fv="UPDATE `product_cart` SET `qty` = '$new_qty' WHERE `product_cart`.`pc_id` = '$ca_fet[pc_id]';";
        if($con->query($fv)===TRUE)
        {
            echo "<script>location.href='shoping-cart.php';</script>";
        }else{
            echo "<script>alert('Failed Plz Try Again Some Error Occours');location.href='shoping-cart.php';</script>";
        }
    }else{
        $total_amount=$_POST[qty]*$pro_fet[dp];
        
        $reo="INSERT INTO `product_cart` (`pc_id`, `c_mob`, `p_id`, `date`, `time`, `mrp`, `dp`, `a_d_dp_id`, `spin_discount`, `qty`, `total_price`) VALUES (NULL, '$mobile', '$_POST[p_id]', '$date', '$time', '$pro_fet[mrp]', '$pro_fet[dp]', '$pro_fet[dp]', 'n', '$_POST[qty]', '');";
        $rt="INSERT INTO `product_cart` (`pc_id`, `c_mob`, `p_id`, `date`, `time`, `mrp`, `dp`, `a_d_dp_id`, `spin_discount`, `qty`, `total_price`,`image`) VALUES (NULL, '$_POST[mobile]', '$_POST[p_id]', '$date', '$time', '$pro_fet[mrp]', '$pro_fet[dp]', '$_POST[a_dp]', '$_POST[d_percentage]', '$_POST[qty]', '$total_amount', '$_POST[image]');";
        if($con->query($reo)===TRUE)
        {
            echo "<script>location.href='shoping-cart.php';</script>";
        }else{
            echo "<script>alert('Failed Plz Try Again Some Error Occours');location.href='shoping-cart.php';</script>";
        }
    }
    if($fg=$con->query($rt)===TRUE)
    {
       $data[] = array("message"=>1);
        
    }else{
        
        $data[] = array("message"=>0);
    }
    echo (json_encode($data));
    
?>    