<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php
    $id_user=$_SESSION['id_user'];
    $tv="SELECT * from dia_chi where id_user='$id_user'  order by id";
    $tv_1=mysqli_query($conn,$tv);
?>
<form action="" method="post">
	<table>
		<tr class="tr_title">
			<td style="width:70%"> 
                <b>Địa chỉ</b>
            </td>
			<td style="text-align:center;">
            <b>Mặc định</b>
			</td>
		</tr>
        <?php
            while($tv_2=mysqli_fetch_array($tv_1))
            {
        ?>
                <tr>
                    <td width="70%"><?php echo $tv_2['vi_tri'] ?></td>
                    <td style="text-align:center;">
                      <input type="radio" name="mac_dinh" value="co">
			        </td>
		        </tr>
        <?php
            }
        ?>
		
		<tr>
			<td colspan=2 style="text-align:center">
				<input type="submit" name="bieu_mau_them_menu_ngang" value="Đặt làm mặc định">
			</td>
		</tr>
	</table>
</form>