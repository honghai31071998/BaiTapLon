
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Trang chủ admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
    function thongbao(){
        if(confirm("Bạn có muốn xóa dòng dữ liệu này ?"))
        {
            return true;
        }
        else{
            return false;
        }
    }
    </script>
  <script>
    function thongbao1(){
        if(confirm("Bạn có muốn sửa dòng dữ liệu này ?"))
        {
            return true;
        }
        else{
            return false;
        }
    }
    </script>

</head>
<body >
    <div class="top">
        <h3 style="color:#FFF;">WELCOME Admin<a href='../logout.php' style="color:#FFF;">(logout)</a></h3>
    </div>
    <div class="menu">
        <ul>    
            <li><a href="danhsachuser.php">Quản lí thành viên</a></li>
            <li><a href="phanloaigt.php">Phân loại giáo trình</a></li>
            <li><a href="giaotrinh.php">Giáo trình</a></li>
            <li><a href="theloaitruyen.php">Thể loại truyện</a></li>
            <li><a href="truyen.php"> Truyện</a></li>
            <li><a href="dangkimuon.php">Quản lí mượn trả </a></li>
        </ul>
    </div>
    <div style="clear:left;"></div>
    