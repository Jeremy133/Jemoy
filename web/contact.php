<?php include ("header.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="Contactstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="contact-title">
		<h1>Contact Us</h1>
		<h2>Got a question? We'd love to hear from you. Send as a message and we'll respond as soon as possible.</h2>
	</div>

	<div class="contact-form">
		<form id="contact-form" method="post" action="contact-form-handler.php">
			<input type="text" name="name" class="form-control" placeholder="Your Name" required><br>
			<input type="text" name="name" class="form-control" placeholder="Your Email" required><br>

			<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
			<input type="submit" class="form-control submit" value="SEND MESSAGE"><br>

			<div class="back">
			<a href="index.php" class="back">Back</a>
			</div>
		</form>
		
	</div>

</body>
</html>