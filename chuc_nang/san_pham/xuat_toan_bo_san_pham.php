<?php
    include('chuc_nang/danh_muc/xuat_danh_muc_san_pham.php');
?>
<h2>TẤT CẢ SẢN PHẨM</h2>
<div class="product-list">
<?php 
    $so_du_lieu=8;
    $tv="select count(*) from san_pham";
    $tv_1=mysqli_query($conn,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    $so_trang=ceil($tv_2[0]/$so_du_lieu);
    if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
    $tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham order by id desc limit $vtbd,$so_du_lieu";
    $tv_1=mysqli_query($conn,$tv);
    while($tv_2=mysqli_fetch_array($tv_1))
    {
        echo "<div class='product'>";
        if($tv_2!=false)
        {
            $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
            $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
            $gia=$tv_2['gia'];
            $gia=number_format($gia,0,",",".");
            echo "<a href='$link_chi_tiet' >";
            echo "<img src='$link_anh' width='200px' class='product_img'>";
            echo "</a>";
            echo "<br>";
            echo "<br>";
            echo "<div class='product_details'>";                      
            echo "<div class='product_name'>";                      
            echo "<a href='$link_chi_tiet' >";
            echo $tv_2['ten'];
            echo "</a><br>";
            echo "</div>";
            echo "<div class='product_price'>";                     
            echo $gia.'&ensp;VNĐ';
            echo "</div>";
            echo "</div>";
            echo "<br>";
        }
        else 
        {
            echo "<div class='product_details'>";
            echo "<div class='product_name'>Không tìm thấy sản phẩm</div>";
            echo "</div>";
        }
        echo "</div>";
    }
?>
</div>
<?php
	include('chuc_nang/pagination/pagination.php');
?>
