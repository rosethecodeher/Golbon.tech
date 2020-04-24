<!DOCTYPE html>
<html>
<body>
<?php 
$name=htmlspecialchars(stripslashes(trim($_POST['name'])));
$email=htmlspecialchars(stripslashes(trim( $_POST['email'])));
$message= htmlspecialchars(stripslashes(trim ($_POST['message'])));
$formcontent="From: $name \n Message:$message";
$recipient= "marandizcreative@gmail.com";
$subject= "Contact Form";
$mailheader = "From: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

</body>
</html>