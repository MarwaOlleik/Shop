<?php  

require_once 'connection.php';

$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO showergels VALUES ('$name', '$password','$phone','$email','$address')";

if($conn->query($sql) === TRUE){
	?>
	<script>
	alert('Your order will be delivered after two days');
	</script>
         <?php  
                header('location:home.html'); ?>
        <!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 
    </body>
</html>
	<?php
}
else{
	?>
	<script>
		alert('Not loaded Successfully');
	</script>
	<?php
}
