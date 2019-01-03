<?php
  session_start();
$id=$_GET["id"];
?>
include("template/header.php");
?>
    <div class="wrapper">
        <table>
            <tr style=" background-color: #00cc66;color:#FFF;">
                <th style="width:50px;">STT</th>
                <th >Email </th>
                <th>Username </th>
                <th> Giáo trình </th>
                <th>Ngày đk mượn</th>
                <th>Chấp nhận</th>
            </tr>
            <?php
            $stt=1;
            require('../connect/config.php');
           $sql="select user.emai,user.username,sach.tensach where ";
           $result=mysqli_query($conn,$sql);
           while($data=mysqli_fetch_assoc($result))//dạng mảng ko có kí tự
           
           {
               echo" <tr>";
                echo"<th>$stt</th>";
                echo"<th>$data[username]</th>";
               echo" <th>$data[email]</th>";
               echo" <th>$data[ngaysinh]</th>";
               
              
                }
                echo"<th><a href='chucnang/xoa_user.php ?id=$data[id_user]'onclick='return thongbao();' style='color:red;'>Delete</a></th>";
            echo"</tr>";
                  $stt=$stt+1;          }
            
            mysqli_close($conn);

            ?>
        </table>
    </div>
    <?php
    include('template/footer.php');
    ?>
</body>
</html>