<?php

require_once 'connection.php';
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "cosmaline";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '$email' and 
	password = '$password_encrypted'");
     
$row = mysqli_fetch_array($sql);
if($row["total"] > 0){
	header('location:home.html');
   
}
else{
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}

?>
