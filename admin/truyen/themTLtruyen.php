<?php
$loi=array();
$loi["tl"]=NULL;
$tl=NULL;
if(isset($_POST["add"]))
{
    if(empty($_POST["tl"]))
    {
        $loi["tl"]="*Xin mời nhập tên thể loại";
    }
    else{
        $tl=$_POST["tl"];
    }
    if($tl)
    {
        require("../connect/config.php");
        $sql="INSERT INTO Theloaitruyen(TenTL) VALUES ('$tl')";
        mysqli_query($conn,$sql);
        echo"thêm thành công";
    mysqli_close($conn);}
}
 ?>  
<?php
include("template/header.php");?>

    <div id="wrapper">
        <fieldset style="width:600px;margin:20px auto;">
            <legend>Thể loại truyện</legend>
            <form action="themTLtruyen.php"method="post">
                <table>
                    <tr>  
                        <td>Name:</td>
                        <td> <input type="text" style="width:250px;"name="tl"></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="add" value="Add"></td>
                    </tr>
                    <div style="color:red;">
                        <?php
                        echo $loi["tl"];
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
