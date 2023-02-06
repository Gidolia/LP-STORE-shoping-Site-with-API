<form method="post"><input type="text" name="a" /><input type="submit" name="b" /></form>
<?php
include "../database_connect.php";
if (isset($_POST[b]))
{
    
    
    $con->query("DELETE FROM `distributor`;");
    $con->query("DELETE FROM `billing`;");
$i=81465;
$con->query("INSERT INTO `distributor` (`d_no`, `d_id`, `s_id`, `placement_id`, `name`, `mobile`, `password`, `dob`, `email`, `sex`, `r_date`, `r_time`, `a_status`, `a_date`, `a_time`, `left_id`, `right_id`, `addreass`, `city`, `state`, `pancard`, `adhar_card`, `left_leg_cf`, `right_leg_cf`, `new_activate`, `count_for_leg`, `withdrawal_wallet`, `pin`) VALUES (NULL, '81465', '0', '0', 'Rohit Gidolia', '0', '123', '', '', 'M', '10-11-2021', '', 'n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
  for ($x = 81466; $x <= $_POST[a]; $x++)
  {
    $con->query("INSERT INTO `distributor` (`d_no`, `d_id`, `s_id`, `placement_id`, `name`, `mobile`, `password`, `dob`, `email`, `sex`, `r_date`, `r_time`, `a_status`, `a_date`, `a_time`, `left_id`, `right_id`, `addreass`, `city`, `state`, `pancard`, `adhar_card`, `left_leg_cf`, `right_leg_cf`, `new_activate`, `count_for_leg`, `withdrawal_wallet`, `pin`) VALUES (NULL, '$x', '$i', '$i', 'Rohit Gidolia', '0', '123', '', '', 'M', '11-11-2021', '', 'n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
    $x++;
  	 $con->query("INSERT INTO `distributor` (`d_no`, `d_id`, `s_id`, `placement_id`, `name`, `mobile`, `password`, `dob`, `email`, `sex`, `r_date`, `r_time`, `a_status`, `a_date`, `a_time`, `left_id`, `right_id`, `addreass`, `city`, `state`, `pancard`, `adhar_card`, `left_leg_cf`, `right_leg_cf`, `new_activate`, `count_for_leg`, `withdrawal_wallet`, `pin`) VALUES (NULL, '$x', '$i', '$i', 'Rohit Gidolia', '0', '123', '', '', 'M', '11-11-2021', '', 'n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
	
	
	
	$i++;
  }
  for ($xe = 81465; $xe <=$_POST[a] ; $xe++)
  {
	  
  	
  	$con->query("INSERT INTO `billing` (`b_id`, `d_id`, `date`, `time`, `business_type`, `amount`, `pv`, `note`) VALUES (NULL, '$xe', '11-11-2021', '', 'pv', '5300', '1', 'New Joining');");
	
	
  }
 }
  
 