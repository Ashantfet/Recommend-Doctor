<?php
if(isset($_POST['submit'])) {
	// Get form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$specialty = $_POST['specialty'];
	$doctor = $_POST['doctor'];
	
	// Set up email
	$to = $email;
	$subject = "Appointment Confirmation";
	$message = "Dear $name,\n\nThank you for booking an appointment. Your appointment details are as follows:\n\n"
				. "Date: $date\n"
				. "Time: $time\n"
				. "Specialty: $specialty\n"
				. "Doctor: $doctor\n\n"
				. "We look forward to seeing you at your appointment.\n\nBest regards,\nYour Doctor's Office";
	$headers = "From: krashant7767@gmail.com"; // replace with your email address
	
	// Send email
	if(mail($to, $subject, $message, $headers)) {
		echo "Thank you for booking an appointment! We have sent a confirmation email to " . $email . ".";
	} else {
		echo "There was a problem booking your appointment. Please try again.";
	}
}
?>
