<?php
include "Mysql_connect.php";
$id=$_GET['idl'];
$del="DELETE FROM `registrationdetails` WHERE id='$id'";
$conn->query($del);
include "index.php";
?>