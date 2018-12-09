<?php
  //buoc 1: ket noi voi server 
  $conn = mysqli_connect('localhost','root','','qlthuvien');
    if(!$conn){
      die('ket noi that bai'.mysqli_connect_error());
    }
?>