<?php
  $conn=mysqli_connect("localhost","root","","thuvien");
  
    if(!$conn){
      die('ket noi that bai'.mysqli_connect_error());
    }
?>