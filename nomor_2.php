<?php 
	function validsai_username($username){
		return preg_match('/^[a-zA-Z0-9]{5,9}$/',$username);
	}
	$user_login = "Asrul23";
	echo "input username = $user_login<br>";
	if(validsai_username($user_login)== true){
		echo "status : username anda valid";
	}else{
		echo "status : username anda tidak valid";
	}
	
	echo "<br><br>";
	
	
	function validasi_password($pass){
		return preg_match('/^(?=[^\d]*\d)(?=[A-Z\d ]*[^A-Z\d ]).{8,}$/i',$pass);
	}
	$pass_login = "C0d3YourFuture!#";
	echo "input password = $pass_login<br>";
	if(validasi_password($pass_login)){
		echo "status : password anda valid";
	}else{
		echo "status : password anda tidak valid";
	}
	echo "<br><br>";
	
	
	function validasi_email($email){
		return preg_match('/^([A-Za-z][A-Za-z0-9\-\.\_]*)\@([A-Za-z][A-Za-z0-9\-\_]*)(\.[A-Za-z][A-Za-z0-9\-\_]*)+$/',$email);
	}
	$alamat_email = "asrulpuadi@gmail.com";
	echo "alamat email = $alamat_email<br>";
	if(validasi_email($alamat_email)){
		echo "status : alamat email anda valid";
	}else{
		echo "status : alamat email anda tidak valid";
	}
	echo "<br><br>";
	
	
	function validasi_nohp($nohp){
		return preg_match('/\+62[0-9]{8,15}$/',$nohp);
	}
	$nomor_hp ="+6285273451234";
	echo "nomor hp = $nomor_hp<br>";
	if(validasi_nohp($nomor_hp)){
		echo "status : nomor hp anda valid";
	}else{
		echo "status : nomor hp anda tidak valid";
	}
	echo "<br><br>";
	
	
?>