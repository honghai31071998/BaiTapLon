<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GiaoTrinh</title>
  <style type="text/css">
    body{
      margin: 75px auto; 
    }
  </style>
</head>
<body>

  <?php
  //buoc 1: ket noi voi server 
  $conn = mysqli_connect('localhost','root','','qlthuvien');
    if(!$conn){
      die('ket noi that bai'.mysqli_connect_error());
    }

 //buoc 2: truy van database 
    mysqli_set_charset($conn,"utf8");
    $sql="select * from giaotrinh";
    $result = mysqli_query($conn, $sql);
  ?>

  <center><h1>Danh Sách Giáo Trình</h1>
  <table border="1">
    <tr>
      <th>TenGiaoTrinh</th>
      <th>NhaXuatBan</th>
      <th>NamXuatBan</th>
      <th>GiaoTrinhID</th>
      <th>Action</th>
    </tr>
    <?php 
      while ($rs = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$rs['TenGiaoTrinh']."</td>";
        echo "<td>".$rs['NhaXuatBan']."</td>";
        echo "<td>".$rs['NamXuatBan']."</td>";
        echo "<td>".$rs['GiaoTrinhID']."</td>";
        echo "<td><a href = 'muon_sach.php'>Mượn Sách</td>";
        echo "<tr>";
      }
    ?>

  </table></center>

</body>
</html>
