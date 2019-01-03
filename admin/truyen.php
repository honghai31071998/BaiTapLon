<?php
include("/template/header.php");
?>
    <div class="wrapper">
        <table>
            <tr>
                <th colspan="8"></th>
                <th colspan="4"><a href="themtruyen.php" style="color:red;">Thêm truyện </a></th>
            </tr>
            <tr  style=" background-color: #00cc66;color:#FFF;">
                <th >STT</th>
                <th >ảnh</th>
                <th style="width:100px;">Tên truyện</th>
                <th style="width:100px;">Tác giả</th>
                <th style="width:400px;">Chi tiết truyện</th>
                <th>Nhà XB </th>
                <th >Thể loại</th>
                <th >Năm XB</th>
                <th>SL</th>
                <th>Sửa</th>
                <th >Link</th>
                <th>Xóa</th>
            </tr>
            <?php
            require("../connect/config.php");
             $sql="select truyen.*,theloaitruyen.TenTL from truyen,theloaitruyen where truyen.id_TL=theloaitruyen.id_tl order by id desc";
            $result=mysqli_query($conn,$sql);
           
            $stt=1;
            while($data=mysqli_fetch_assoc($result)){
            echo"<tr>";
                echo"<th>$stt</th>";
                echo"<th>$data[hinhanh]</th>";
                echo"<th>$data[tentruyen]</th>";
                echo"<th>$data[tacgia]</th>";
                echo"<th>$data[mota]</th>";
                echo"<th>$data[nhaxb] </th>";
                echo"<th>$data[TenTL]</th>";
                echo"<th>$data[namxb]</th>";
                echo"<th>$data[sl]</th>";
                echo"<th><a href='Sua_gt.php?id=$data[id]' onclick='return thongbao1();'style='color:red;'>Sửa</a></th>";
                echo"<th><a href='../chitiettruyen.php?id=$data[id]'style='color:red;'>Link</a></th>";
                echo"<th><a href='chucnang/Xoa_gt.php ?id=$data[id]' onclick='return thongbao();'style='color:red;'>Xóa</a></th>";
           echo" </tr>";
        $stt++;}
           mysqli_close($conn)
            ?>
        </table>
    </div>
    <?php
include("/template/footer.php");
?>
</body>
</html>