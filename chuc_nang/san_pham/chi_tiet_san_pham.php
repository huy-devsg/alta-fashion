<h2>CHI TIẾT SẢN PHẨM</h2><br>
<?php
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
?>
<table>
	<tr>
		<td width='250px' align='center' >
			<img src='<?php echo $link_anh; ?>' width='150px' >
		</td>
		<td valign='top' >
			<a href='#'>
				<?php echo $tv_2['ten']; ?>
			</a>
			<br>
			<br>
			<?php
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				echo $gia;
			?>
			<br>
			<br>
			<form>
				<input type='hidden' name='thamso' value='gio_hang' > 
				<input type='hidden' name='id' value='<?php echo $_GET['id']; ?>' > 
				<input type='text' name='so_luong' value='1' style='width:50px' > 
				<input type='submit' value='Thêm vào giỏ' style='margin-left:15px' > 
			</form> 
		</td>
	</tr>
	<tr>
		<td colspan='2' >
			<?php
				if($tv_2['noi_dung']=="")
				{
					echo 'Chưa có thông tin sản phẩm';
				}
				else
				{
					echo $tv_2['noi_dung'];
				}
			?>
		</td>
	</tr>
</table>
<style>
	/* Styles for the product details page */

table {
  border-collapse: collapse;
  width: 100%;
}

table td {
  border: 1px solid #ddd;
  padding: 10px;
  vertical-align: top;
}

table td:first-child {
  width: 250px;
}

table td img {
  display: block;
  margin: 0 auto;
}

table td a {
  color: #333;
  font-size: 18px;
  font-weight: bold;
  text-decoration: none;
}

table td a:hover {
  text-decoration: underline;
}

table td form {
  margin-top: 10px;
}

table td form input[type="text"] {
  border: 1px solid #ddd;
  font-size: 16px;
  padding: 5px;
  text-align: center;
  width: 50px;
}

table td form input[type="submit"] {
  background-color: rgba(255,105,0,1);
  border: none;
  color: #000;
  cursor: pointer;
  font-size: 16px;
  padding: 10px;
  text-align: center;
  border-radius: 20px;

}

table td form input[type="submit"]:hover {
  background-color: #fff;
color: rgba(255,105,0,1);
border: solid 0.5px rgba(255,105,0,1) ;
}

table td:nth-child(2) {
  padding-left: 20px;
}

</style>