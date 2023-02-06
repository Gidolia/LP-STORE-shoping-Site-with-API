<?php
include "database_connect.php";
$rfs=0;
if(isset($_SESSION[mobile]))
{
    if(isset($_POST[submit_check_out]))
    {
        $frps="SELECT MAX(ob_id) AS max  FROM `order_bill`";
        $lpo=$con->query($frps);
        $yout=$lpo->fetch_assoc();
        $ob_id=$yout[max]+1;
        
        $dh="INSERT INTO `order_bill` (`ob_id`, `mobile`, `calling_no`, `addreass`, `city`, `state`, `pin_code`, `price`, `status`) VALUES ('$ob_id', '$_SESSION[mobile]', '$_POST[mobile_no]', '$_POST[addreass]', '$_POST[city]', '$_POST[state]', '$_POST[pincode]', '$rfs', 'p');";
        echo $dh;
        $dh .="DELETE FROM `product_cart` WHERE `product_cart`.`c_mob` = '$_SESSION[mobile]'";
        
        $pcr="SELECT * FROM `product_cart` WHERE `c_mob`='$_SESSION[mobile]'";
        $poi=$con->query($pcr);
        while($dco=$poi->fetch_assoc())
        {
            $a=$dco[a_d_dp_id]*$dco[qty];
            $rfs=$rfs+$a;
            
            $dh .="INSERT INTO `order_bill_detail` (`obd_id`, `ob_id`, `p_id`, `mrp`, `dp`, `price`, `qty`) VALUES (NULL, '$ob_id', '$dco[p_id]', '$dco[mrp]', '$dco[dp]', '$dco[a_d_dp_id]', '$dco[qty]');";
            //$con->query($dh);
        }
        
        if($con->multi_query($dh)===TRUE)
        {
            echo "<script>alert('Success! Orders Placed Successfully');location.href='login.php';</script>";
        }
        else{
            echo "<script>alert('Failed ! Plz Try Again');location.href='index.php';</script>";
        }
    }
}else{
    echo "<script>alert('Sorry Something Went Wrong Plz Try Again');location.href='login.php';</script>";
}