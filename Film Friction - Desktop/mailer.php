<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){ // Check that there is data in the 'name', 'email' and 'message' fields
	$n = $_POST['n']; // Get the data that the user input to the 'name' field in the contact form
	$s = $_POST['s'];// Get the data that the user input to the 'subject' field in the contact form
	$e = $_POST['e']; // Get the data that the user input to the 'email' field in the contact form
	$m = nl2br($_POST['m']); // Get the data that the user input to the 'message' field in the contact form. nl2br function changes new lines to break tags
	$to = "30179533@blackpool.ac.uk"; // Set the email address that all messages from the contact form are to be sent to
	$from = $e; // Set a variable to display who the message is from using their defined email address from the contact form
	$subject = 'Film Friction Contact Form Message'; // Create a subject for the email that is created from the contact form message
	$message = '<b>Name:</b> '.$n.' <br><b>Subject:</b> '.$s.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>'; // Populate the email with data entered in the fields from the contact form
	$headers = "From: $from\n"; // Set the header to include who the message is from using their defined email address from the contact form
	$headers .= "MIME-Version: 1.0\n"; // Set the MIME-Version
	$headers .= "Content-type: text/html; charset=iso-8859-1\n"; // Set the content type and character set for the email
	if( mail($to, $subject, $message, $headers) ){ // If the mail function has completed successfully
		echo "success"; // echo 'success' to the ajax request
	} else {
		echo "The server failed to send the message. Please try again later."; // If there is a problem and the mail function fails, echo 'The server failed to send the message. Please try again later.' to the ajax request
	}
}
?>