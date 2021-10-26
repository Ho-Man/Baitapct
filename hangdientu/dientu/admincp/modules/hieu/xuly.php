<?php
	include('../config.php');
		$hieu=$_POST['hieu'];
		$id=$_GET['id'];
		
	if(isset($_POST['them'])){
		//them
		
		$PGSQL="insert into hieu(tenhieu) value('$hieu')";
		pg_query($PGSQL);
		header('location:../../index.php?quanly=hieu&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$PGSQL="update hieu set tenhieu='$hieu' where hieu_id='$id'";
		pg_query($PGSQL);
		header('location:../../index.php?quanly=hieu&ac=sua&id='.$id);
	}else{
	//xóa
	$PGSQL="delete from hieu where hieu_id='$id'";
	pg_query($PGSQL);
	header('location:../../index.php?quanly=hieu&ac=them');
	}
?>