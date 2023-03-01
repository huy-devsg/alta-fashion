<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<style type="text/css" >
	a.lk_1{font-size:22px;text-decoration:none;color:blue;margin-right:30px}
	a.lk_1:hover {color:red}
</style>
<br>
<center>
<a href="index.php" style="font-size:72px;color:blue;text-decoration:none" >Hi, <?php echo $_SESSION['ky_danh']; ?></a>
</center>
<br><br>
<table width="990px" >
	<tr>
		<td width="800px">
			<a href="index.php" class="lk_1" >Trang chủ</a>
			<a href="?thamso=menu_doc" class="lk_1" >Danh mục sản phẩm</a>
			<a href="?thamso=menu_ngang" class="lk_1" >Menu</a>
			<a href="?thamso=san_pham" class="lk_1" >Sản phẩm</a>
			<a href="?thamso=hoa_don" class="lk_1" >Hóa đơn</a>
		</td>
		<td align="right" >
			<a href="?thamso=thoat" class="lk_1" >Thoát</a>
		</td>
	</tr>
</table>
<br><br>
<?php 
	include("chuc_nang/quan_tri_2/dieu_huong.php");
?>
<br><br>
<table width="990px" >
	<tr>
		<td align="right" >
		Footer
		</td>
		<td>
			Footer
		</td>
	</tr>
</table>