<?php
include "../database_connect.php";

$rff="UPDATE `costumer` SET `name`=[$_POST[name]],`email`=[$_POST[email]],`addreass`=[$_POST[addreass]],`city`=[$_POST[city]],`state`=[$_POST[state]],`dob`=[$_POST[dob]] WHERE `mobile`='$_POST[mobile]'";
$con->query($rff);
?>