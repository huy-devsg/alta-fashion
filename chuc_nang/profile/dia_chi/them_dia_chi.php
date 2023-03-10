<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<form action="" method="post">
	<table width="990px" >
		<tr>
			<td width="150px" >Tên : </td>
			<td width="840px">
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="" >
			</td>
		</tr>
		<tr>
			<td>Địa chỉ : </td>
			<td>
				Mặc định
			</td>
		</tr>
		<tr>
			<td>dia chi ne </td>
			<td>
                    <input type="radio">
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_them_menu_ngang" value="Thêm menu">
			</td>
		</tr>
	</table>
</form>