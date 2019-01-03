<?php
include("template/header.php");
$id=$_GET["id"];
$loi["ts"]=$loi["tg"]=$loi["namxb"]=$loi["nhaxb"]=$loi["mota"]=$loi["sl"]=NULL;
$ts=$idpl=$ha=$tg=$namxb=$nhaxb=$mota=$sl=NULL;
if(isset($_POST["update"]))
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
        $ha="none";
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
        if($ha=='none')
        {
            $sql2="UPDATE `sach` SET `tensach`='$ts',`tacgia`='$tg',
           `nhaxb`='$nhaxb',`pl_id`='$idpl',`mota`='$mota',`namxb`='$namxb',`sl`='$sl' WHERE id=$id";
            mysqli_query($conn,$sql2);}
        else
        {mysqli_query($conn,"UPDATE `sach` SET `tensach`='$ts',`hinhanh`='$ha',`tacgia`='$tg',
            `nhaxb`='$nhaxb',`pl_id`='$idpl',`mota`='$mota',`namxb`='$namxb',`sl`='$sl' WHERE id=$id");
   move_uploaded_file($_FILES["ha"]["tmp_name"],"../connect/images/".$_FILES["ha"]["name"]);
    }
    mysqli_close($conn);
}
}

?>
<?php
require("../connect/config.php");
$sql1="SELECT * FROM `sach` WHERE id=$id";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_assoc($result1);

?>

<div id="wrapper" style="margin:0px auto">
        <fieldset style="width:600px;margin:20px auto;">
            <legend style="padding-left:50px;"> Chỉnh sửa</legend>
            <form action='Sua_gt.php ?id=<?php echo"$id";?>'method="post" enctype="multipart/form-data">
                <table>
                    <tr>  
                        <td>Phân loại </td>
                        <td>
                        <select style='padding:3px 4px;' name='pl'><?php
                           require("../connect/config.php");
                           $sql="select*from ploaigt";
                           $result=mysqli_query($conn,$sql);
                           while($data=mysqli_fetch_assoc($result))//dạng mảng ko có kí tự
                           {
                               if($data1['pl_id']==$data['pl_id']){
                                    echo" <option value='$data[pl_id]'selected='selected'> $data[phanloai]</option> ";}
                           else
                                 {echo" <option value='$data[pl_id]'> $data[phanloai]</option> ";}}
                           mysqli_close($conn);
                           
                           ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tên sách</td>
                        <td><input type="text" name="ts" size="50" value="<?php echo $data1['tensach']?>">
                    </td>
                    </tr>
                    <tr>
                        <td>Hình ảnh cũ</td>
                        <td><img src="../connect/images/<?php echo $data1['hinhanh']?>" style='width:100px;'></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh mới</td>
                        <td><input type="file" name="ha" size="25" ></td>
                    </tr>
                    <tr>
                        <td>Tác giả</td>
                        <td><input type="text" name="tg" size="50" value="<?php echo $data1['tacgia']?>"></td>
                    </tr>
                    <tr>
                        <td>Nhà xuất bản</td>
                        <td><input type="text" name="nhaxb" size="50" value="<?php echo $data1['nhaxb']?>"></td>
                    </tr>
                    <tr>
                        <td>Chi tiết sách</td>
                        <td><textarea cols="60" rows="10" name="mota"><?php echo $data1['mota'];?>></textarea></td>
                    </tr>
                    <tr>
                        <td>Năm xuất bản</td>
                        <td><input type="text" name="namxb" size="50"value="<?php echo $data1['namxb']?>"></td>
                    </tr>
                    <tr>
                        <td>SL</td>
                        <td><input type="text" name="sl" size="10"value="<?php echo $data1['sl']?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                    <div style="color:red;">
                    <?php 
                        echo $loi["ts"];
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