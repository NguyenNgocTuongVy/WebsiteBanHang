<div class="content">
	<div class="left">
	<?php
		include('left/danhmucsanpham.php');	
	?>
	</div>
	
	<div class="right">
	<?php	
	if(isset($_GET['xem'])){
		$tam=$_GET['xem'];
	}
	else{
		$tam='';
	}
	if($tam=='sanphamtheodanhmuc'){
		include('modules/right/sanphamtheodanhmuc.php');
	}
	else if($tam=='chitietsanpham'){
		include('modules/right/chitietsanpham.php');
	}
	
	else {
		include('modules/right/sanpham.php');	
	}	
	?>
	</div>
	
		
</div>
	<div class="clear"></div>