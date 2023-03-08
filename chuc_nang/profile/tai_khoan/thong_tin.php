<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ky_danh=$_SESSION['ky_danh'];
	$tv="select * from tai_khoan where ky_danh='$ky_danh'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ho_ten=$tv_2['ho_ten'];	
	$email=$tv_2['email'];	
	$ky_danh=$tv_2['ky_danh'];	
	$dia_chi=$tv_2['dia_chi'];
	$mat_khau=$tv_2['mat_khau'];
?>
<style>
 input[type="text"],input[type="password"] {
	width:80%;
	text-align:left;
 }
 
</style>
<form action="" method="post" >
	<table width="990px" >
		<tr>
			<td width="100px" >Họ và tên : </td>
			<td width="890px" >
				<input type="text" name="ky_danh" value="<?php echo $ho_ten; ?>" readonly >
			</td>
		</tr>
		<tr>
			<td width="100px" >Tên tài khoản : </td>
			<td width="890px" >
				<input type="text" name="ky_danh" value="<?php echo $ky_danh; ?>" readonly>
			</td>
		</tr>
		<tr>
			<td width="100px" >Email : </td>
			<td width="890px" >
				<input type="text" name="ky_danh" value="<?php echo $email; ?>" readonly>
			</td>
		</tr>
		<tr>
			<td width="100px" >Địa chỉ : </td>
			<td width="890px" >
				<input type="text" name="ky_danh" value="<?php echo $dia_chi; ?>"readonly >
			</td>
		</tr>
	</table>
</form>