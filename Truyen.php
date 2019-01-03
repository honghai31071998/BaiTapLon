<?php
    session_start();
?>
<?php
include("modules/header.php");
?>

    <!--Sidebar-->
    <div id="container">
        <div class="container-left">
            <div class="block1">
                <div class="box-common">
                    <div class="heading">
                        <h4 class="box-title" style="width: 75%">TÌM KIẾM</h4>
                    </div>
                </div>
                <div class="border-tk">
                    <form class="border-row" action="searchtruyen.php" method="post">
                        <div class="row-col">
                            <h4>Tên truyện</h4>
                            <input type="text" name="tk" style="width:140px;">
                        </div>
                        <div class="row-col">
                            <h4>Phân loại </h4>
                            <select style='padding:3px 4px;' name='pl'>
                          <?php 
                           require("connect/config.php");
                           $sql="select*from theloaitruyen";
                           $result=mysqli_query($conn,$sql);
                           while($data=mysqli_fetch_assoc($result))//dạng mảng ko có kí tự
                           {
                           echo" <option value='$data[id_TL]'name='phanloai' > $data[TenTL]</option> ";
                           }
                            mysqli_close($conn);
                        ?>
                       </select>
                        </div>
                        <div class="row-col">
                            <h4>Tìm kiếm</h4>
                            <button class="icon-search" style="float:left;width:140px;"name="timkiem"><i class="fas fa-search"></i></button>
                        </div>

                    </form>
                </div>
            </div>
            <?php
           require("connect/config.php");
           $sql2="select*from theloaitruyen";
           $result2=mysqli_query($conn,$sql2);
           while($data2=mysqli_fetch_assoc($result2))//dạng mảng ko có kí tự
           {
            echo"<div class='block2'>";
                echo"<div class='box-common'>";
                    echo"<div class='heading'>";
                        echo"<h4 class='box-title'style='width: 75%'> $data2[TenTL]</h4>";
                    echo"</div>";
                echo"</div>";
                echo"<div class='border1'>";
                    echo"<div class='border11'>";
                        echo"<table>";
                           /* echo"<tr>";
                               /*echo"<th></th>";
                                echo"<th></th>";
                            echo"</tr>";*/
                            echo"<tr>";
                                echo"<td>";
                                    echo"<div class='border-td'>";
                                   
                                    $sql3="select * from truyen where id_TL=$data2[id_TL] order by id desc";
                                    $result3=mysqli_query($conn,$sql3);
                                    $data3=mysqli_fetch_assoc($result3);
                                    echo"<div class='fff' value='$data3[id]'>";
                                      
                                     echo"   <h4>";
                                           echo" <li><a href='chitiettruyen.php?id=$data3[id]'>$data3[tentruyen]</a></li>";
                                      echo"  </h4>";
                                   echo" </div>";
                                    echo"<div class='ggg'>";
                                      echo"  <div class='hhh'><img src='connect/images/$data3[hinhanh]' style='width:100px;'></div>";
                                        echo"<div class='jjj'>Tác giả: $data3[tacgia] <br>";
                                           echo" Nhà xuất bản: $data3[nhaxb] <br>";
                                           echo" Năm xuất bản: $data3[namxb] </div>";
                                          
                                        echo"</div>";
                                echo"</td>";
                                echo"<td>";
                                    echo"<div class='border-td'>";
                                    $sql1="select * from truyen where id_TL=$data2[id_TL] order by id desc limit 1,1";
                                        $result1=mysqli_query($conn,$sql1);
                                        $data1=mysqli_fetch_assoc($result1);
                                        echo"<div class='fff' value='$data1[id]'>";
                                          
                                         echo"   <h4>";
                                               echo" <a href='chitiettruyen.php?id=$data1[id]'><li>$data1[tentruyen]</li></a>";
                                          echo"  </h4>";
                                       echo" </div>";
                                        echo"<div class='ggg'>";
                                          echo"  <div class='hhh'><img src='connect/images/$data1[hinhanh]' style='width:100px;'></div>";
                                            echo"<div class='jjj'>Tác giả: $data1[tacgia] <br>";
                                               echo" Nhà xuất bản: $data1[nhaxb] <br>";
                                               echo" Năm xuất bản: $data1[namxb] </div>";
                                             
                                        echo"</div>";
                                echo"</td>";
                            echo"</tr>";
                        echo"</table>";
                    echo"</div>";
                    echo"<div class='pagination'>";
                    $display=2;
                   /* $sql4="select * from sach ";
                    $result4=mysqli_query($conn,$sql4);
                    $sum_page=ceil($result4/$display);*/
                        echo"<ul>";
                       // for($page=1;$page<=$sum_page;$page)
                            echo"<li><a href='Giaotrinh.php'>1</a></li>";
                            echo"<li><a href='#'>2</a></li>";
                            echo"<li><a href='#'>3</a></li>";
                            echo"<li><a href='#'>Next</a></li>";
                            echo"<li><a href='#'>Trang cuối</a></li>";
                        echo"</ul>";
                     
                echo"</div>";
            echo"</div>";
            }
            mysqli_close($conn);?>

                </div>
            </div>
        </div>
            <div class="container-right">
                <div class="panel-news">
                    <div class="panel-news">
                        <img src='img/hotrott.png' style="width:220px;">
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:left;"></div>
    
        <div id="Footer"style="margin-top:100px;">
            <p><i>Websize - Quản Lý Thư Viện @2018</i></p>
        </div>
        <!--Footer-->
    </div>

</body>

</html>

