<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$tv="select * from bai_viet order by id ";
	$tv_1=mysqli_query($conn,$tv);
?>

<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="200px" ><b>Hình ảnh</b></td>
		<td width="200px" ><b>Tiêu đề</b></td>
		<td width="200px" ><b>Nội dung</b></td>
		<td align="center" width="140px" ><b>Sửa</b></td>
		<td align="center" width="140px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$link_hinh="../hinh_anh/bai_viet/".$tv_2['anh'];
			$link_sua="?thamso=profile&dieu_huong=sua_bai_viet&id=".$id;
			$link_xoa="?xoa_bai_viet=co&id=".$id;
			$tieu_de=$tv_2['tieu_de'];
			$noi_dung = $tv_2['noi_dung'];
			$noi_dung = mb_substr($noi_dung, 0, 270) . "...";
			?>
				<tr class="a_1" >
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >
							<img src="<?php echo $link_hinh; ?>" style="width:200px;max-height:200px;margin-top:10px;margin-bottom:10px;" border="0" >
						</a>
					</td>
					<td align="center" >
						<?php echo $tieu_de ?>
					</td>
					<td align="center" width="600px" >
						<?php echo $noi_dung ?>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" class="lk_a1" >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>

</table>