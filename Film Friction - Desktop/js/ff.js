// JavaScript Document

//Contact form script
function _(id){ return document.getElementById(id); } // Defines '_' as a function to save typing 'document.getElementById' each time it is required
		function submitForm(){ // Create a function to submit the form
			_("mybtn").disabled = true; // After clicking the button, disable it to prevent sending data multiple times
			_("status").innerHTML = 'please wait ...'; // Add the 'please wait...' string to the 'status' id within the contact form
		var formdata = new FormData(); // Create a variable to append new values to the data that is transferred to php
		formdata.append( "n", _("n").value ); // Add data entered into the 'name' field in the contact form to the new form
		formdata.append( "s", _("s").value ); 
		formdata.append( "e", _("e").value ); // Add data entered into the 'email' field in the contact form to the new form
		formdata.append( "m", _("m").value ); // Add data entered into the 'message' field in the contact form to the new form
		var ajax = new XMLHttpRequest(); // Create a variable called 'ajax' and create a new XMLHttpRequest
		ajax.open( "POST", "mailer.php" ); // Post data to the php script 'mailer.php'
		ajax.onreadystatechange = function() { // When the ready state of ajax changes, run the following function
			if(ajax.readyState === 4 && ajax.status === 200) { // Check that the data has finished processing in the php script and that the php script has returned data to the ajax object
				if(ajax.responseText === "success"){ //  If the value of 'ajax.responseText' is 'success'
					_("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2><br><br>'; // Change the value of 'h2' in the contact form
				} else {
					_("status").innerHTML = ajax.responseText; // If the value of 'ajax.responseText' is not 'success' amend the value to display the error message defined in 'mailer.php'
					_("mybtn").disabled = false; // Allow the button to be clicked again due to the previous failure when sending the form data
					}
				}
			};
			ajax.send( formdata ); // Send the data from the contact form to the designated email address
		}