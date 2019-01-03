<?php
include("template/header.php");
?>
    <div class="wrapper">
        <table>
            <tr style=" background-color: #00cc66;color:#FFF;">
                <th style="width:50px;">STT</th>
                <th >Username</th>
                <th style="width:250px;">Email </th>
                <th>birdthday </th>
                <th> Gender</th>
                <th>Level</th>
                <th>Delete</th>
            </tr>
            <?php
            $stt=1;
            require('../connect/config.php');
           $sql="select id_user,username,email,ngaysinh,gioitinh,level from user ";
           $result=mysqli_query($conn,$sql);
           while($data=mysqli_fetch_assoc($result))//dạng mảng ko có kí tự
           
           {
               echo" <tr>";
                echo"<th>$stt</th>";
                echo"<th>$data[username]</th>";
               echo" <th>$data[email]</th>";
               echo" <th>$data[ngaysinh]</th>";
               
                if($data['gioitinh']==1)
                {
                    echo"<th>Nam</th>";
                }
                else{
                    echo"<th>Nữ</th>";
                }
               
                if($data['level']==1)
                {
                    echo"<th>Thành viên</th>";
                }
                else{
                    echo"<th>Admin</th>";
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