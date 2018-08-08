<?php
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$get_msg = mysqli_real_escape_string($conn, $_POST['message']);
$to="gpmas117@gmail.com";


$msg = "Message from " + name + " Message reads " +message+ "return email address is " + email;
// send email
mail("gpmas117@gmail.com","form message", $msg);

?>

