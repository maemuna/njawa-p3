<?php
$check_db=mysqli_query($koneksi,"select * from user");
$user_name=$check_db['username'];
$password=$check_db['password'];
$level=$check_db['level'];
if($_POST['username'] =='') && if($_POST['password']==''){
	
	if($_SESSION['level']==$level;
	
	if($level=='maneger'){
	redirect "manager.php";
	}elseif($level=='spv'){
		redirect "spv.php";
	}elseif($level=='forment'){
		redirect "forment.php";
	}elseif($level=='staff'){
		redirect "staff.php";
	}elseif($level='admin'){
		redirect "admin.php";
	}else{
		redirect "operator.php";
	}
}elseif($_POST['username']=='NULL') && if($_POST['password']=='NULL');
	echo "silahkan isi username & password"
}else{
	echo "password & username yang di masukan salah"
}

?>