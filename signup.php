<?php  

require_once 'connection.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "cosmaline";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO signup (name, email, password) 
VALUES ('$name', '$email', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	header('location:home.html');
 
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}
?>
 


