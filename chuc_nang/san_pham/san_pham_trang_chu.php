	<h2>SẢN PHẨM MỚI NHẤT</h2>
	<div class="product-list">
		<?php 
		$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham order by id desc limit 8";
		$tv_1=mysqli_query($conn,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			echo "<div class='product'>";
			if($tv_2!=false)
			{
				$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
				$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				echo "<a href='$link_chi_tiet' >";
					echo "<img src='$link_anh' class='product_img' width='200px' >";
				echo "</a>";
				echo "<br>";
				echo "<br>";	
				echo "<div class='product_details'>";						
				echo "<div class='product_name'>";						
				echo "<a href='$link_chi_tiet' >";
							/*$str = $tv_2['ten'];
							$words = explode(" ", $str); 
							$first_three_words = array_slice($words, 0, 5);
							$result = implode(" ", $first_three_words); 
							echo $result;
							*/
				echo $tv_2['ten'];
				echo "</a><br>";
				echo "</div>";
				echo "<div class='product_price'>";						
				echo $gia.'&ensp;VNĐ';
				echo "</div>";
				echo "</div>";
				echo "<br>";
				echo '';
		}
			else 
			{
				echo "&nbsp;";
			}
			echo "</div>";
		}
		?>
	</div>