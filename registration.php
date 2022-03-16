<!DOCTYPE html> 
<html>

<head>

	<title> UTM Tech Society - University of Technology, Mauritius Tech Society</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">

</head>




<div id="body">
<img id="banner" src="images/tech.jpg" alt="UTM Tech society banner"/>
  

<div id="content">
<h2>
  Message Sent
</h2>
	<fieldset>
	<form caption="Message Sent" action="" method="post"/>
	<?php

// Validate the name:
if (!empty($_POST['name'])) {
	$name = $_POST['name'];
} else {
	$name = NULL;
	echo '<p class="error">You forgot to enter your name!</p>';
}

// Validate the email:
if (!empty($_POST['email'])) {
	$email = $_POST['email'];
} else {
	$email = NULL;
	echo '<p class="error">You forgot to enter your email address!</p>';
}

// Validate the comments:
if (!empty($_POST['message'])) {
	$comment = $_POST['message'];
} else {
	$comment = NULL;
	echo '<p class="error">You forgot to write your message!</p>';
}

// If everything is OK, print the message & send email:
if ($name && $email && $comment) {

	//send email
				$to="tech.society.utm@gmail.com";
				$subject = "Tech Society Message" ;
				$message = "Sender: ".$name." E-mail: ".$email." Message: ".$comment;
				mail($to, $subject,	$message);
				echo "Registration sent.<br />";
				echo "<br />Name : " .$name ;
				echo "<br /><br />Thank you for your message. We will get in touch with you soon.";
	
} else { // Missing form value.
	echo '<p class="error">Please go back and fill out the form again.</p>';
}
?>
		<br />	
	</form>
	<a href="index.html">Go to home page</a>
	</fieldset>
</div>
</body>
</html>