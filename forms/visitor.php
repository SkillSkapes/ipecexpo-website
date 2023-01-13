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
"\r\n Contact Number:".$userphone.
"\r\n Message:".$usermessage. "\r\n";


if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

// database connection
    $hostname="your_hostname";
	$username="your_dbusername";
	$password="your_dbpassword";
	$dbname="your_dbusername";
	$usertable="your_tablename";

$conn = new mysqli('localhost','id20127593_form_admin','Ipecexpo@1form','id20127593_ipec_forms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into exhibitor(name, companyname, email, userphone, usermessage ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $name, $companyname, $email, $userphone, $usermessage);
		$execval = $stmt->execute();
		// echo $execval;
// 		$url="https://www.ipecexpo.in/thank-you.html";
        // echo " Registration successfully...";
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


