<?php
include("template/header.php");
?>
        <div class="wrapper">
        <table style="width:800px;margin:0px auto; margin-top:30px;">
            <tr>
            <th colspan="2"></th>
            
            <th colspan="2" ><a href="themTLtruyen.php" style="color:red;">Thêm</a></th>
            </tr>
            <tr style=" background-color: #00cc66;color:#FFF;">
                <th >STT</th>
                <th >Thể loại</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
            <?php 
                 $stt=1;
                require("../connect/config.php");
                $sql="select*from theloaitruyen";
                $result=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_assoc($result))//dạng mảng ko có kí tự
                {
                    echo"<tr>";
                    echo"<th>$stt</th>";
                    echo"<th> $data[TenTL]</th>";
                    echo"<th><a href='#' style='color:red;'>Edit</a></th>";
                    echo"<th><a href='chucnang/xoa_tltruyen.php ?id=$data[id_TL]'onclick='return thongbao();' style='color:red;'>Delete</a></th>";
                    echo"</tr>";
                    $stt=$stt+1;}
               
                mysqli_close($conn);
                        ?>
               
            </tr>
        </table>
 </div>
 <?php
    include('template/footer.php');
    ?>
</body>
</html>