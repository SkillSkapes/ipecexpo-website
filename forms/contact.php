<?php

$name = $_POST['name'];
$email = $_POST['email'];
$usermessage = $_POST['usermessage'];
$to = "geo.skillskapes@gmail.com";
$subject = "Mail from Ipecexpo (contact)";

$headers = "From: ".$name."\r\n".
"CC: ";
$txt = "You have received an email from ".$name.
"\r\n Name: ".$name.
"\r\n E-mail: ".$email.
"\r\n Message:".$usermessage. "\r\n";


if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

// database connection
//     $hostname="localhost";
// 	$username="ipecezwk_form_ow";
// 	$password="Ipecexpo@forms1";
// 	$dbname="ipecezwk_forms";
// 	$usertable="ipecezwk_contact";

$conn = new mysqli('localhost', 'ipecezwk_contact_admin', 'Contact@54321', 'ipecezwk_contact_form' );
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(name, email, usermessage ) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $usermessage);
		$execval = $stmt->execute();
// 		echo $execval;
//         echo " Registration successfully...";
// 		$stmt->close();
// 		$conn->close();
        header('Location:https://www.ipecexpo.in/thank-you.html');
	}


// if(!empty($_POST["submit"])) {
// 	$name = $_POST["name"];
//     $companyname = $_POST["companyname"];
//     $email = $_POST["email"];
// 	$userphone = $_POST["userphone"];
// 	$usermessage = $_POST["usermessage"];
// 	$to = "geo.skillskapes@gmail.com";
  
// 	$mailHeaders = "Name: " . $name .
//     "\r\n Companyname: ". $companyname  .
// 	"\r\n Email: ". $email  . 
// 	"\r\n Phone: ". $userphone  . 
// 	"\r\n Message: " . $usermessage . "\r\n";

// 	if(mail($toemail, $name, $mailHeaders)) {
// 	    $message = "Your contact information is received successfully.";
// 	}
// }

// header('Location:https://www.ipecexpo.in/thank-you.html');

?>


