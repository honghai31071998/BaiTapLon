<?php

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
                <th>Từ chối</th>
            </tr>
            <?php
            $stt=1;
            require('../connect/config.php');
           $sql="select dkmuonsach.username,dkmuonsach.email,sach.tensach,dkmuonsach.ngaydkmuon from dkmuonsach,sach where dkmuonsach.id=sach.id ";
           $result=mysqli_query($conn,$sql);
           while($data=mysqli_fetch_assoc($result))//dạng mảng ko có kí tự
           
           {
               echo" <tr>";
                echo"<th>$stt</th>";
                echo"<th>$data[username]</th>";
               echo" <th>$data[email]</th>";
               echo" <th>$data[tensach]</th>"; 
                echo"<th>$data[ngaydkmuon]";
                echo"<th><button type='button'name='chapnhan'style='color:red;'>Chấp nhận</button></th>";
                echo"<th><button type='button'name='tuchoi'style='color:red;'>Chấp nhận</button></th>";
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
<?php
if(isset($_POST["chapnhan"]))
{
    
}
?>