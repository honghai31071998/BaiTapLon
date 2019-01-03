<?php
$id=$_GET["id"];
require('../../connect/config.php');
mysqli_query($conn,"delete from user where id_user=$id");
mysqli_close($conn);
header("location:../danhsachuser.php")
?>
