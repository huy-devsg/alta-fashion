<?php
	$tu_khoa=$_GET['tu_khoa'];
	echo '<h2>TÌM KIẾM SẢN PHẨM</h2>';
	if(isset($_GET['trang']))
	{
		echo '<h4> Từ khóa tìm kiếm : <b>'.strtoupper($tu_khoa).'</b> / Trang '.$_GET['trang'].'</h4>';
	}
	else{
		echo '<h4> Từ khóa tìm kiếm : <b>'.strtoupper($tu_khoa).'</b></h4>';
	}
?>
<div class="product-list">
<?php 
	if(trim($tu_khoa!="")){ 
		$m=explode(" ",$tu_khoa);  
		$chuoi_tim_sql="";
		for($i=0;$i<count($m);$i++)
		{
			$tu=trim($m[$i]);
			if($tu!="")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
			}
		}
		$m_2=explode(" ",$chuoi_tim_sql);    
		$chuoi_tim_sql_2="";
		for($i=0;$i<count($m_2)-1;$i++)
		{
			$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
		} 
		$so_du_lieu=8;
		$tv="select count(*) from san_pham  where $chuoi_tim_sql_2";
		$tv_1=mysqli_query($conn,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		$so_trang=ceil($tv_2[0]/$so_du_lieu);
		if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
		$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where $chuoi_tim_sql_2 order by id desc limit $vtbd,$so_du_lieu";
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
            echo "Không tìm thấy sản phẩm";
        }
        echo "</div>";
    }
?>
</div>
<?php
	include('chuc_nang/pagination/pagination.php');
	}
	else
	{
	echo "Bạn chưa nhập từ khóa";
	}
?>

</div>