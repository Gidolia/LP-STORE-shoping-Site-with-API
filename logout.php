<?php
include "database_connect.php";
session_destroy();
echo "<script>location.href='login.php';</script>";
?>