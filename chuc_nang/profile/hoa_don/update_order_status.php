<?php
				if(isset($_POST['update_status']))
				{
					if($_POST['tinh_trang']==1)
					{
						$query="UPDATE hoa_don SET tinh_trang='Chờ xử lý' where id='$id'";
						mysqli_query($conn,$query);
					}
					elseif($_POST['tinh_trang']==2)
					{
						$query="UPDATE hoa_don SET tinh_trang='Đã xác nhận' where id='$id'";
						mysqli_query($conn,$query);

					}
					elseif($_POST['tinh_trang']==3)
					{
						$query="UPDATE hoa_don SET tinh_trang='Đang giao hàng' where id='$id'";
						mysqli_query($conn,$query);

					}
					else
					{
						$query="UPDATE hoa_don SET tinh_trang='Đã giao hàng' where id='$id'";
						mysqli_query($conn,$query);
					}
					
				}
			?>