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
	echo '<div class="product_list">';
	echo "<br>";
	echo "<br>";
	if($gio_hang=="khong")
	{
		echo "Không có sản phẩm trong giỏ hàng";
	}
	else 
	{
		echo "<form action='' method='post' >"; 
		echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
		echo "<table border=1 width=100% class='product_table'>";
			echo "<tr>";
			echo "<td width='100px' >&nbsp;</td>";
				echo "<td width='200px' ><b>Tên</b></td>";
				echo "<td width='150px' ><b>Số lượng</b></td>";
				echo "<td width='150px' ><b>Đơn giá</b></td>";
				echo "<td width='170px' ><b>Thành tiền</b></td>";
			echo "</tr>";
			$tong_cong=0;
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
				echo "<tr>";
				echo '<td><img src='.$link_anh.' width="100px"></td>';
					echo "<td>".$tv_2['ten']."</td>";
					echo "<td>";
					echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
					echo "<input type='text' style='width:50px' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
					echo "</td>";
					echo "<td>".$tv_2['gia']."</td>";
					echo "<td>".$tien."</td>";
				echo "</tr>";
				}
			}	
			echo "<tr>";
				echo "<td colspan='5' style='padding:10px;'>Tổng giá trị đơn hàng là : <b>".$tong_cong." VNĐ</b><br>";
				echo "<input type='submit' class='btn btn-primary' value='Cập nhật' ><br></td>";
			echo "</tr>";	
		echo "</table>";
		echo "</form>";
		echo "<br>";
		include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
	}
	echo '</div>';
?>
<style>
	.product_table
	{
		text-align:center;
	}
	.btn-primary
	{
		border:none;
		background-color:rgba(255,105,0,1);
		color:#000;
	}
	.btn-primary:hover
	{
		border:solid 1px rgba(255,105,0,1);
		background-color:#fff;
		color:rgba(255,105,0,1);;
	}
</style>