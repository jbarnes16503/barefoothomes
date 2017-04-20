<?php

$propertyDeveloper = $_POST["propertyDeveloper"];
$homeOwner = $_POST["homeOwner"];

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$EmailTo = "contact@barefoothomes.co.uk";
$Subject = "Barefoot Homes - New query recieved";

$type = "";
if ($propertyDeveloper == "") {
    $type = "Home Owner";
} else {
    $type = "Property Developer";
}

$Body = "";
$Body .= "Type: ";
$Body .= $type;
$Body .= "\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "\n" ."\n";
$Body .= $message;
$Body .= "\n";
$Body .= "\n";
$Body .= "\n";
$Body .= "This email was automatically generated.";

mail($EmailTo, $Subject, $Body, "From:".$email);

$response .= 'Thank you ' .$name ."\n" ."\n" .'We have recieved your enquiry. A copy has been printed below:' ."\n" ."\n" ."\n" ."\n" .$message ."\n" ."\n" ."\n" ."\n" .'Please allow us up to 24 hours to respond to your query.' ."\n" ."\n" ."\n" .'Barefoot Homes';
mail($email, "Your query has been recieved", $response, "From:".$EmailTo);

?>