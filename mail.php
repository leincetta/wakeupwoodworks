// <?php 

// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];
// $formcontent="Contact form\n\nFrom: $name \nMessage: $message";
// $recipient = "leandroincetta@gmail.com";
// $subject = "Contact Form";
// $mailheader = "From: $email \r\n";

// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You! E-mail send.";

// ?>

<?php

$EmailFrom = "contact@wakeupwoodworks.com";
$EmailTo = "leandroincetta@gmail.com";
$Subject = "Someone contacted you via wakeupwoodworks.com";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>