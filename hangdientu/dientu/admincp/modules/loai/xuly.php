<?php
	include('../config.php');
		$loai=$_POST['loai'];
		$id=$_GET['id'];
		
	if(isset($_POST['them'])){
		//them
		
		$PGSQL="insert into loai(tenloai) value('$loai')";
		pg_query($PGSQL);
		header('location:../../index.php?quanly=loai&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$PGSQL="update loai set tenloai='$loai' where loai_id='$id'";
		pg_query($PGSQL);
		header('location:../../index.php?quanly=loai&ac=sua&id='.$id);
	}else{
	//xóa
	$PGSQL="delete from loai where loai_id='$id'";
	pg_query($PGSQL);
	header('location:../../index.php?quanly=loai&ac=them');
	}
?>