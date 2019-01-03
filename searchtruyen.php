<?php
    session_start();
    include("modules/header.php");
?>
    <div id="container-content">
    
  <?php
    if (isset ($_POST [ "timkiem"])) {
        $search = addslashes($_POST['tk']); 
        if (empty($search)) {
            echo "Yeu cau nhap du lieu vao o trong";
        } 
        else
        {
            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
            $query = "select * from truyen where tentruyen like '%$search%'or nhaxb like'%$search%' or namxb like '%$search%' or mota like '%$search%'";
            
    
            // Kết nối sql
            require('connect/config.php');
            // Thực thi câu truy vấn
            $sql = mysqli_query($conn,$query);
    
            // Đếm số đong trả về trong sql.
            $num = mysqli_num_rows($sql);
    
            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
            if ($num > 0 && $search != "") 
            {
                $stt=1;
                // Dùng $num để đếm số dòng trả về.
                echo "<h4>$num ket qua tra ve voi tu khoa <b>$search</b></h4>
                <table>
             
                <tr  style=' background-color: #777777;color:#FFF;'>
                    <th >STT</th>
                    <th >ảnh</th>
                    <th style='width:100px;'>Tên truyện</th>
                    <th style='width:100px;'>Tác giả</th>
                    <th>Nhà XB </th>
                    <th style='width:400px;'>Chi tiết truyện</th>
                    <th >Năm XB</th>
                    <th >Link</th>
                   
                </tr>";
                while ($row = mysqli_fetch_assoc($sql)) {
                echo"<tr>";
                    echo"<th>$stt</th>";
                    echo"<td><img src='connect/images/$row[hinhanh]' style='width:100px;'></td>";
                    echo"<th>$row[tentruyen]</th>";
                    echo"<th>$row[tacgia]</th>";
                    echo"<th>$row[nhaxb] </th>";
                    echo"<th>$row[mota]</th>";
                    echo"<th>$row[namxb]</th>";
                    echo"<th><a href='chitiettruyen.php?id=$row[id]'style='color:red;'>Link</a></th>";
               echo" </tr>";
            $stt++;}
    
                
           echo" </table>";
    
              
            } 
    else {
                echo "Khong tim thay ket qua!";
            }
        }
    }
    ?>   


</div>
<div id="Footer"style="margin-top:100px;">
		<p>Websize - Quản Lý Thư Viện @2018</p>
	</div>
</div>
</body>
</html>
<style>
     table{
    margin-top:20px;
    text-align:center;
    width:1000px;
    border-collapse: collapse;/* thuộc tính đường viền*/
    line-height:25px;
}
th{
    border: 1px solid #777777;
    line-height:30px;

}
td
{
    border: 1px solid #777777;
}
    </style>