<?php 
	if(!isset($bien_bao_mat)){exit();}
	include('xac_dinh_dang_nhap.php');
?>
<?php
	if(isset($_SESSION['xac_dinh_dang_nhap']))
	{
		header('location:index.php');
	}
	else
	{
?>
<br><br>
<center>
	<form method="post" >
		<table>
			<?php	
				if(isset($_GET['thamso']))
				{
					if($_GET['thamso']=='dang_ky')
					{
			?>
					<tr>
					<td style="width:50%;text-align:right;">Họ và tên :</td>
						<td><input style="width:150px" name="ho_ten" ></td>
					</tr>
					<tr>
					<td style="width:50%;text-align:right;">Ký danh :</td>
						<td><input style="width:150px" name="ky_danh" ></td>
					</tr>
					<tr>
					<td style="width:50%;text-align:right;">Email :</td>
						<td><input style="width:150px" name="email" ></td>
					</tr>
					<tr>
					<td style="width:50%;text-align:right;">Mật khẩu :</td>
						<td><input type="password" style="width:150px" name="mat_khau" ></td>
					</tr>
					<tr>
						<td colspan=2 style="text-align:center;">
							<input type="hidden" name="dang_ky" value="dang_ky" >
							<input type="submit" value="Đăng ký" ><br><br>
							Bạn đã có tài khoản => <a href="?thamso=dang_nhap" style="color:rgba(255,105,0,1);font-weight:bold;	text-decoration: none;">Đăng nhập</a>
						</td>
					</tr>
					<?php
						}
						else
						{
					?>		
					<tr>
						<td style="width:50%;text-align:right;">Ký danh :</td>
						<td><input style="width:150px" name="ky_danh" ></td>
					</tr>
					<tr>
						<td style="width:50%;text-align:right;">Mật khẩu :</td>
						<td><input type="password" style="width:150px" name="mat_khau" ></td>
					</tr>
					<tr>
						<td colspan=2 style="text-align:center;">
							<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
							<input type="submit" value="Đăng nhập" ><br><br>
							Bạn chưa có tài khoản => <a href="?thamso=dang_ky" style="color:rgba(255,105,0,1);font-weight:bold; text-decoration: none;">Đăng ký</a>
						</td>
					</tr>	
			<?php	
				}
			}				
			?>
		</table>
	</form>
</center>
<?php } ?>