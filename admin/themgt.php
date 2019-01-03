<?php
include("template/header.php");
?>
<?php
$loi=array();
$loi["ts"]=$loi["ha"]=$loi["tg"]=$loi["namxb"]=$loi["nhaxb"]=$loi["mota"]=$loi["sl"]=NULL;
$ts=$idpl=$ha=$tg=$namxb=$nhaxb=$mota=$sl=NULL;
if(isset($_POST["add"]))
{
    $idpl=$_POST["pl"];
  
    
    if(empty($_POST["ts"]))
    {
        $loi['ts']="*Chưa điền tên sách";
    }
    else
    {
        $ts=$_POST["ts"];
    }
  
   if($_FILES["ha"]["error"]>0)
    {
        $loi["ha"]="*Xin vui lòng chọn hình ảnh";
    }
    else
    {
        $ha=$_FILES["ha"]["name"];
}
    if(empty($_POST["tg"]))
    {
        $loi['tg']="*Chưa điền tên tác giả";
    }
    else
    {
        $tg=$_POST["tg"];
    }
    if(empty($_POST["nhaxb"]))
    {
        $loi['nhaxb']="*Chưa điền nhà xb";
    }
    else
    {
        $nhaxb=$_POST["nhaxb"];
    }
    if(empty($_POST["mota"]))
    {
        $loi['mota']="*Chưa điền thông tin sách";
    }
    else
    {
        $mota=$_POST["mota"];
    }
    if(empty($_POST["namxb"]))
    {
        $loi['namxb']="*Chưa điền năm xuất bản";
    }
    else
    {
        $namxb=$_POST["namxb"];
    }
    if(empty($_POST["sl"]))
    {
        $loi['sl']="*Chưa điền số lượng sách";
    }
    else
    {
        $sl=$_POST['sl'];
    }
    if($ts&&$tg&&$namxb&&$nhaxb&&$mota&&$ha&&$sl)
    { require("../connect/config.php");
        $sql="INSERT INTO sach(tensach,hinhanh,tacgia,nhaxb,pl_id,mota,namxb,sl) 
        VALUES('$ts','$ha','$tg','$nhaxb','$idpl','$mota','$namxb','$sl')";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
   move_uploaded_file($_FILES["ha"]["tmp_name"],"../connect/images/".$_FILES["ha"]["name"]);
    }
    
}  

?>
    <div id="wrapper" style="margin:0px auto">
        <fieldset style="width:600px;margin:20px auto;">
            <legend style="padding-left:50px;"> Thêm giáo trình</legend>
            <form action="themgt.php " method="post" enctype="multipart/form-data">
                <table>
                    <tr>  
                        <td>Phân loại </td>
                        <td><select style='padding:3px 4px;' name='pl'><?php
                           require("../connect/config.php");
                           $sql="select*from ploaigt";
                           $result=mysqli_query($conn,$sql);
                           while($data=mysqli_fetch_assoc($result))//dạng mảng ko có kí tự
                           {
                           echo" <option value='$data[pl_id]'> $data[phanloai]</option> ";}
                           mysqli_close($conn);
                           
                    
                      ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tên sách</td>
                        <td><input type="text" name="ts" size="50">
                    </td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><input type="file" name="ha" size="25" ></td>
                    </tr>
                    <tr>
                        <td>Tác giả</td>
                        <td><input type="text" name="tg" size="50"></td>
                    </tr>
                    <tr>
                        <td>Nhà xuất bản</td>
                        <td><input type="text" name="nhaxb" size="50"></td>
                    </tr>
                    <tr>
                        <td>Chi tiết sách</td>
                        <td><textarea cols="60" rows="10" name="mota"></textarea></td>
                    </tr>
                    <tr>
                        <td>Năm xuất bản</td>
                        <td><input type="text" name="namxb" size="50"></td>
                    </tr>
                    <tr>
                        <td>SL</td>
                        <td><input type="text" name="sl" size="10"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="add" value="Add"></td>
                    </tr>
                    <div style="color:red;">
                        <?php
                        echo $loi["ts"];
                        echo $loi["ha"];
                        echo $loi["tg"];
                        echo $loi["namxb"]; 
                        echo $loi["nhaxb"];
                        echo $loi["mota"];
                        echo $loi["sl"];
                        ?>
                        </div>
                </table>
            </form> 
        </fieldset>
        
    </div>
    <?php
    include("template/footer.php");
    ?>
</body>
</html>

    
