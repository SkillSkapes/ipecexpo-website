<?php

$name = $_POST['name'];
$companyname = $_POST['companyname'];
$email = $_POST['email'];
$userphone = $_POST['userphone'];
$usermessage = $_POST['usermessage'];
$to = "geo.skillskapes@gmail.com";
$subject = "Mail from Website";

$headers = "From: ".$name."\r\n".
"CC: ";
$txt = "You have received an email from ".$name.
"\r\n Name: ".$name.
"\r\n Company Name: ".$companyname.
"\r\n E-mail: ".$email.
"\r\n Contact Number:".$phonenumber.
"\r\n Message:".$message. "\r\n";

if($email!=NULL){
    mail($to, $subject, $txt, $headers);
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

header('Location:https://www.ipecexpo.in/thank-you.html')

?>
