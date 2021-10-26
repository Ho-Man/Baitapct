<div class="content_right" style="width:100%;">
	<?php

		if(isset($_POST['search'])){
			$timkiem=$_POST['search_query'];
			$PGSQL="select * from products where product_keywords like '%$timkiem%'";
			$run_timkiem=pg_query($conn,$PGSQL);
				
			while($dong_timkiem=pg_fetch_array($run_timkiem)){
			

			
				echo '<img src="admincp/modules/sanpham/uploads/'.$dong_timkiem['product_image'].'" width="120" height="150"/>';
				echo '<p>Tên sản phẫm:'.$dong_timkiem['product_title'].'</p>';
				echo '<p>Giá:'.$dong_timkiem['product_price'].'</p>';
				echo '<p><a href="index.php?xem=chitiet&id='.$dong_timkiem['product_id'].'">Chi tiết</a></p>';
					
			}
		
		
		}else{
			echo 'Không tìm thấy kết quả';
		}	
	
 ?>
 </div>

