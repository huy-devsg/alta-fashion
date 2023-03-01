<?php 
	if(isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
	{
		$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
	}

	$gio_hang="khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$so_luong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($so_luong!=0)
		{
			$gio_hang="co";
		}
	}
	
	echo "<h2>GIỎ HÀNG</h2>";
	echo '<div class="product_wrapper">';
	if($gio_hang=="khong")
	{
		echo "Không có sản phẩm trong giỏ hàng";
	}
	else 
	{
		echo "<form action='' method='post' >"; 
		echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
			$tong_cong=0;
			echo "<div class='cart'>";

			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$tv="select * from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
				$tv_1=mysqli_query($conn,$tv);
				$tv_2=mysqli_fetch_array($tv_1);		
				$tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
				$tong_cong=$tong_cong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
				$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{
					echo "<a href='$link_chi_tiet' >";
					echo "<img src='$link_anh' width='200px' class='cart_img'>";
					echo "</a>";
					echo "<div class='cart_details'>";                      
					echo "<div class='cart_name'>";                      
					echo "<a href='$link_chi_tiet' >";
					echo $tv_2['ten'];
					echo "</a><br>";
					echo "</div>";
					echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
					echo "<input type='text' style='width:50px' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
					echo "<div class='cart_price'>";                     
					echo $tv_2['gia'].'&ensp;VNĐ';
					echo '<br>';
					echo $tien;
					echo "</div>";
					echo "</div>";
					echo '</div>';
				}
			}	
				echo "Tổng giá trị đơn hàng là : ".$tong_cong." VNĐ";
				echo '<br>';
				echo "<input type='submit' value='Cập nhật' > ";
		echo "</form>";
		echo '</div>';
		echo "<br>";
		include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
	}
?>
<style>
	.cart-list {
	display: flex;
	flex-wrap: wrap;
  }
  .cart {
	flex-basis:25%;
	text-align: left;
	border-radius: 20px;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
	transition: transform 0.2s;
	overflow: hidden;
	width: 25%;

  }
  .cart_img {
	transition: transform 0.2s;

  }
  .cart_img:hover {
	transform: scale(1.2);
  }
</style>