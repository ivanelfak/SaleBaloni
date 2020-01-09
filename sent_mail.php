<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
$email = $_POST['email'] ;
$message = $_POST['message'] ;
$name = $_POST['name'] ;
$phone = $_POST['phone'] ;
$error_page = "error_message.html";
$thankyou_page = "thank_you.html";
$find_us = $_POST['find-us'] ;
$news = $_POST['news'] ;


// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("./PHPMailer/PHPMailerAutoload.php");


$mail = new PHPMailer();

// set mailer to use SMTP
$mail->IsSMTP();

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->Host = "smtp.gmail.com";  // specify main and backup server

$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SMTPAutoTLS = false; 


// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@bradm.example.com
// pass: password
$mail->Username = "sale.baloni.jb@gmail.com";  // SMTP username
$mail->Password = "salebal0ni."; // SMTP password

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
//$mail->From = $email;
$mail->setFrom($email, "");
//$mail->addAttachment($attach['file']); 
$mail->addReplyTo($email, $name);

// below we want to set the email address we will be sending our email to.
$mail->AddAddress("sale.baloni.jb@gmail.com", "");
$mail->addBCC($email, $name);

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "Porudzbina sa sajta!";

$mail->Body = "<br>Ime: " . $name.
               "<br>Email: " . $email.
               "<br>Obavestenja: " . $news. 
               "<br>Kako ste nas pronasli: "  . $find_us.
               "<br>Telefon: "  . $phone.
               "<br>Poruka: " . $message;

$mail->AltBody = $message;

if($_FILES['file']){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
	   $array = explode('.', $file_name);
       $file_ext = end( $array); 

             
      $expensions= array("txt","pdf", "");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[] = "0";
         echo "<br>Fajl mora biti PDF formata. Vi ste uneli fajl " . $file_ext;
         echo '<p><a href="index.html">Vratite se na nas sajt</a>.</p>';
      }
      
      if($file_size > 2097152) {
         $errors[] = "0";
         echo '<br>File mora biti manji od 2 MB';
         echo '<p><a href="index.html">Vratite se na nas sajt</a>.</p>';
      }
      
      if(empty($errors)==true) {
        move_uploaded_file($file_tmp,'uploads/' . $file_name); //The folder where you would like your file to be saved
        $mail->addAttachment("uploads/".$file_name);

         if(!$mail->Send()){
            header( "Location: $error_page" ); 
         } else {
         echo "Message has been sent";
         header( "Location: $thankyou_page" );
         };         
      };  
      
   }; 






// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;



?>