<style>
        .container {
            width: 1080px;
            height: 200px;
        }

        #carousel-inner {
            width: 1030px;
            padding: 10px 0px 10px 0px;
            height: 180px;
        }

        .ppp {
            width: 980px;
            margin:0px auto;
        }

        .kkk {
            width: 196px;
            float:left;
        }
        .kkk img{
            margin:0px auto;
            display: block;
          
        }
    </style>
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carouse">
            <!----Indicators 
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>-->

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                
               <div class="item active">
                   <div class="ppp">
                   <?php 
                   require('connect/config.php');
                   $sql="select * from sach order by id limit 5";
                   $result=mysqli_query($conn,$sql);
                        while($data=mysqli_fetch_assoc($result))
                        {echo" <a href='chitietsach.php?id=$data[id]' class='kkk' style='width:196px;'>";
                            echo"<img src= 'connect/images/$data[hinhanh]'alt='giaotrinh' style='height:180px;'>";

                      echo"</a>";}
                      mysqli_close($conn);/*
                      
                        <a href="#" class="kkk">
                            <img src="giaotrinh/cam-nang-doanhthumb.jpg" alt="Los Angeles" style="height:180px;">

                        </a>
                        <a href="#" class="kkk">
                            <img src="giaotrinh/de-bien-va-ke-maithumb.jpg" alt="Los Angeles" style="height:180px;">

                        </a>
                        <a href='#' class="kkk">
                            <img src="giaotrinh/gt-vat-ly-iiithumb.jpg" alt="Los Angeles" style="height:180px;">
                        </a>
                        <a href="#" class="kkk">
                            <img src="giaotrinh/img_11.jpg" alt="Los Angeles" style="height:180px;">
                        </a>*/
                        ?>
                    </div>
                </div>
                
                <div class="item">
                    <div class="ppp">
                    <?php 
                   require('connect/config.php');
                   $sql="select * from sach order by id limit 5,10";
                   $result=mysqli_query($conn,$sql);
                        while($data=mysqli_fetch_assoc($result))
                        {echo" <a href='chitietsach.php?id=$data[id]' class='kkk' style='width:196px;'>";
                            echo"<img src= 'connect/images/$data[hinhanh]'alt='giaotrinh' style='height:180px;'>";

                      echo"</a>";}
                      mysqli_close($conn);?>
                    </div>
            </div>



            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
</body>
<script>$('.carousel').carousel({
        interval: false
      })</script>