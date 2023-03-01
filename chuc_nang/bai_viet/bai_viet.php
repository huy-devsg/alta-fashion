<div class="khung">
<h2>BÀI VIẾT SẢN PHẨM</h2>
<br>
<div class="wrapper">
  <?php
    $tv="select * from bai_viet order by id limit 3";
    $tv_1=mysqli_query($conn, $tv);
    $i = 0;
    while ($tv_2 = mysqli_fetch_array($tv_1)) {
      $link_menu = "?thamso=xuat_san_pham&id=".$tv_2['id'];
      $link_anh="hinh_anh/bai_viet/".$tv_2['anh'];
      $tieu_de=$tv_2['tieu_de'];
      if ($i == 0) {
        echo '<div class="main-article">';
        echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    
          <div class="item active">
          <img src="hinh_anh/slideshow/a_1.jpg" alt="'.$tieu_de.'" style="width:100%;">
          <div class="carousel-caption">
              <h3>'.$tieu_de.'</h3>
            </div>
          </div>
    
          <div class="item">
          <img src="hinh_anh/slideshow/a_2.jpeg" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
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
      </div>';
        
        echo '</div>';
      } else {
        echo '<div class="article">';
        echo "<img src='$link_anh'>";
        echo "<div class='tieu_de'>";
        echo '<a href="'.$link_menu.'">';
        echo "<h4>$tieu_de</h4>";
        echo "</div>";
        echo "</a><div class='noi_dung'>";
        $str = $tv_2['noi_dung'];
							$words = explode(" ", $str); 
							$first_three_words = array_slice($words, 0, 75);
							$noi_dung = implode(" ", $first_three_words); 
              echo $noi_dung;
        echo '</div></div>';
      }
      $i++;
    }     
  ?>
</div>
</div>
<style>
  .carousel-inner
  {
    max-height: 500px;
  }
.carousel-control{
  opacity: 0;
}
.carousel-control{
border-radius: 20px;}
  .carousel-caption
  {
    background-color:black;
  }
  .wrapper {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .article {
    width: 25%;
    height: 100%;
    max-height:250px;
    margin-bottom: 20px;
    text-align: left;
  }

  .main-article {
    background-color: #fff;
    border-radius: 20px;
    display: flex;
    flex-direction: row;
    width: 47%;
    height: 458px;
  }

  .main-article img {
    width: 100%; /* thêm một div mới để bao bọc ảnh và thay đổi giá trị của width */
    border-radius: 20px;
    min-height: 458px;

  }


  .main-article h3 {
    margin-top: 0;
  }

  .article img {
    display: block;
    width: 100%;
    height: 250px;
    margin-bottom: 10px;
    border-radius: 20px;
}

.article a {
font-size: 18px;
font-weight: bold;
color: #000;
text-decoration: none;
}

.article a:hover {
text-decoration: underline;
}
.noi_dung
{
  margin-top: 8px;
  margin-bottom: 200px;
}
.tieu_de
{
  margin-top: 10px;
  min-height: 40px;
  font-weight: bold;
}
</style>
