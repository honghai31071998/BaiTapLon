<?php
$loi=array();
$loi["pl"]=NULL;
$pl=NULL;
if(isset($_POST["add"]))
{
    if(empty($_POST["pl"]))
    {
        $loi["pl"]="*Xin mời nhập tên chuyên ngành";
    }
    else{
        $pl=$_POST["pl"];
    }
    if($pl)
    {
        require("../connect/config.php");
        $sql="INSERT INTO ploaigt(phanloai) VALUES ('$pl')";
        mysqli_query($conn,$sql);
        echo"thêm thành công";
    mysqli_close($conn);}
}
 ?>  
<?php
include("template/header.php");?>

    <div id="wrapper">
        <fieldset style="width:600px;margin:20px auto;">
            <legend>Phân loại sách</legend>
            <form action="themplgt.php"method="post">
                <table>
                    <tr>  
                        <td>Name:</td>
                        <td> <input type="text" style="width:250px;"name="pl"></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="add" value="Add"></td>
                    </tr>
                    <div style="color:red;">
                        <?php
                        echo $loi["pl"];
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
