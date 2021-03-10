<?php



	//Capture POST data from HTML form and Sanitize them, 
    $name       = filter_var($_POST["fullName"], FILTER_SANITIZE_STRING); //sender name
    $company    = filter_var($_POST["companyName"], FILTER_SANITIZE_STRING); //get company name from HTML form
    $email      = filter_var($_POST["email"], FILTER_SANITIZE_STRING); //get email from HTML form
    $phone      = filter_var($_POST["phone"], FILTER_SANITIZE_STRING); //get phone from HTML form
    $message_from    = filter_var($_POST["message"], FILTER_SANITIZE_STRING); //message

	$from = "test@srisrinivastravels.com";
	$to = "mahendrakampalli@prodesigntek.com";
    $subject = "Contact Person Details";
	date_default_timezone_set("Asia/Kolkata");
	$dt = date("l jS \of F Y h:i:s A");

	// message body
    $message ="Below are the Contact Person Details:\r\n
    <html>
        <body>
            <div>
                <table border='2' style='border-collapse: collapse;'>
                    <tr>
                        <th>Name</th>
                        <td>$name</td>
                    </tr>
                    <tr>
                        <th>Company Name</th>
                        <td>$company</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>$phone</td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>$message_from</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>$dt</td>
                    </tr>
                </table>
            </div>
        </body>
    </html>
    ";


	// headers
    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    // Additional headers
    $headers .= 'From: test@srisrinivastravels.com ';


    $mail = mail($to, $subject, $message, $headers);

	if($mail){
		session_start();
		$_SESSION['user_email'] = $email;
		$_SESSION['user_name'] = $name;
		header('location: email-user.php');
}
else{
	echo "Fail";
}



?>