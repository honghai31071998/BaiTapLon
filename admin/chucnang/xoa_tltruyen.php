<?php
$id=$_GET["id"];
require('../../connect/config.php');
mysqli_query($conn,"delete from theloaitruyen where id_truyen=$id");
mysqli_close($conn);
header("location:../theloaitruyen.php")
?>