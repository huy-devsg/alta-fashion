<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<form action="" method="post" enctype="multipart/form-data" >
	<table width="990px" >
		<tr>
			<td colspan="2" ><b style="color:blue;font-size:20px" >Thêm bài viết</b><br><br> </td>
			
		</tr>
		<tr>
			<td width="150px" >Liên kết : </td>
			<td width="840px" >
				<input type="text" name="lien_ket" style="width:400px;margin-top:3px;margin-bottom:3px;" >
			</td>
		</tr>
		<tr>
			<td>Hình ảnh : </td>
			<td>
				<input type="file" name="hinh_anh" >
			</td>
		</tr>
		<tr>
			<td>Tiêu đề : </td>
			<td>
				<input type="text" name="tieu_de" >
			</td>
		</tr>
		<tr>
			<td>Nội dung : </td>
			<td>
				<input type="text" name="noi_dung" >
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br><br>
				<input type="submit" name="bieu_mau_them_bai_viet" value="Thêm bài viết" style="width:150px;height:40px;font-size:18px" >
			</td>
		</tr>
	</table>
</form>