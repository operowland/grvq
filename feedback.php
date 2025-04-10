<<<<<<< HEAD
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Feedback | greneavenue</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="more/gr1.css" type="text/css" />
<style type="text/css">
<!--
.style3 {
	font-size: 500%;
	color: #00FF00;
	font-style: italic;
}
.style10 {color: #FF0033}
-->
</style>
</head>
 <body style="width:90%; padding-left:5%">

<div>
 <?php include($_SERVER['DOCUMENT_ROOT']."/more/header.php"); ?>
  </div>


<div>
 <?php include($_SERVER['DOCUMENT_ROOT']."/more/greneoptions.php"); ?>
  </div>
    
    <div style="background-color:#FFF">
    
  <div>
  <?php include($_SERVER['DOCUMENT_ROOT']."/more/menu1.php"); ?>
  </div> 



<div style="position:absolute; bottom:0px; width:90%"><?php include($_SERVER['DOCUMENT_ROOT']."/more/footer.php"); ?></div>


	 
<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "feedback@greneavenue.com";
     
    $email_subject = "greneavenue feedback submissions";
     
     
    function died($error) {
        // your error code can go here 
       echo "<br /><br />";
        echo "We are very sorry, but there were error(s) found with the form you submitted.<br /><br />";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }






     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
<?php include($_SERVER['DOCUMENT_ROOT']."more/contact_response.php");?>




  <?php
}
die();
?> 






</body>
</html> 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

=======
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Feedback | greneavenue</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="more/gr1.css" type="text/css" />
<style type="text/css">
<!--
.style3 {
	font-size: 500%;
	color: #00FF00;
	font-style: italic;
}
.style10 {color: #FF0033}
-->
</style>
</head>
 <body style="width:90%; padding-left:5%">

<div>
 <?php include($_SERVER['DOCUMENT_ROOT']."/more/header.php"); ?>
  </div>


<div>
 <?php include($_SERVER['DOCUMENT_ROOT']."/more/greneoptions.php"); ?>
  </div>
    
    <div style="background-color:#FFF">
    
  <div>
  <?php include($_SERVER['DOCUMENT_ROOT']."/more/menu1.php"); ?>
  </div> 



<div style="position:absolute; bottom:0px; width:90%"><?php include($_SERVER['DOCUMENT_ROOT']."/more/footer.php"); ?></div>


	 
<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "feedback@greneavenue.com";
     
    $email_subject = "greneavenue feedback submissions";
     
     
    function died($error) {
        // your error code can go here 
       echo "<br /><br />";
        echo "We are very sorry, but there were error(s) found with the form you submitted.<br /><br />";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }






     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
<?php include($_SERVER['DOCUMENT_ROOT']."more/contact_response.php");?>




  <?php
}
die();
?> 






</body>
</html> 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

>>>>>>> 8c82a25a7dc13de4870a706773ea7e0c4b0008ac
