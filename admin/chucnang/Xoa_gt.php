<?php
$id=$_GET["id"];
require('../../connect/config.php');
mysqli_query($conn,"delete from sach where id=$id");
mysqli_close($conn);
header("location:../giaotrinh.php")
?>