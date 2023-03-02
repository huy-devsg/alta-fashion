<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
    // Lấy dữ liệu từ bảng "bai_viet"
    $sql = "SELECT * FROM bai_viet";
    $result = mysqli_query($conn, $sql);
    // Tạo các indicators
?>
</ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php
    // Tạo các slide
    $index = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $active = $index == 0 ? "active" : "";
      echo '<div class="item ' . $active . '">';
      echo '<img src="hinh_anh/bai_viet/'.$row['anh'].'" alt="' . $row["tieu_de"] . '" style="width:100%;">';
      echo '<div class="carousel-caption d-none d-md-block">';
      echo '<h3 class="animated">' . $row["tieu_de"] . '</h3>';
      echo '</div>';
      echo '</div>';
      $index++;
    }
    ?>
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
<style>
  .carousel-inner
  {
border-radius:20px;
}
  .slide
  {
    width: 100%;
    height: 100%;
  }
  .item
  {
    width: 100%;
    height: 100%;
  }
  .item img
  {
    width: 100%;
    height: 100%;  }
.carousel-caption {
        position: absolute;
        bottom: -8%; 
        left: 2%;
        padding: 5%;
        max-width: 70%;
        border-radius:5px;
        color: #fff;
        transform: translateY(100%);
        animation: slide-up 1s forwards;
        background-color:red;
}

@keyframes slide-up {
  to {
    transform: translateY(-50px);
  }
}



</style>