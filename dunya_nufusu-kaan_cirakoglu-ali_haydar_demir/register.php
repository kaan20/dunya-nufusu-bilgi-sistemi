<?php


echo '<pre>';
	print_r($_POST);
echo '</pre>';

include "settings.php"; 

session_start();
ob_start(); 
include 'connection.php'; 



//name ile text'lerden veri çekme

if(isset($_POST['kayitButonu'])){ // isset, parametre olarak aldığı değişkenin tanımlı olup olmadığını kontrol eder.
	
	$type = 1;
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$dogum_tarihi = $_POST['dogum_tarihi'];
	$cinsiyet = $_POST['cinsiyet'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$dogum_tarihi = date('Y-m-d');
	$cinsiyet = 1;
	
	
	
	if($email && $password){

		
		
		mysqli_query($baglan, "INSERT INTO kullanicilar (`type`, `name`, `surname`, `email`, `password`, `cinsiyet`, `dogum_tarihi`, `phone`) VALUES 
		('".$type."', '".$name."', '".$surname."', '".$email."', '".$password."' , '".$cinsiyet."' , '".$dogum_tarihi."' , '".$phone."' ) ");
		
		 
		
		$insert_id = mysqli_insert_id($baglan);
		
		if($insert_id){
			
			$_SESSION["email"] = $email; // Sessionlar oturum bilgilerini saklamak için kullanılan yapılardır.
			$_SESSION["kullaniciID"] = $insert_id;
			$_SESSION["kullaniciTipi"] = $type;
			$_SESSION["first_login"] = "first"; // log kaydı için kenarda dursun
			
			
			header('Location:index.php');
			

		}else{
			echo 'no register '.date('H:i:s');
			/*
			echo "<script type='text/javascript'>
			window.location='login.php?user=false';
			</script>";
			*/
		}
	}
	
}


?>
