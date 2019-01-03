<?php
$id=$_GET["idpl"];
require('../../connect/config.php');
mysqli_query($conn,"delete from ploaigt where pl_id=$id");
mysqli_close($conn);
header("location:../phanloaigt.php");
?>
