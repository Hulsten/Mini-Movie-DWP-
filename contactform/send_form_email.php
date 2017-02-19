<?php
require_once "../login/includes/functions.php";
if(isset($_POST['ContactButton'])){
    
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $privatekey = "6LcFKAwUAAAAAN2kmmf4UboiBI6svAH-5AEMePHF";


    $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $data = json_decode($response, true);
    //print_r($data);
    if(isset($data['success']) && $data['success']==true) {
            
        
            sendEmail();  
            header('Location: ../kontakt.php?CaptchaPass=True');

    }else{

            header('Location: ../kontakt.php?CaptchaFail=True');

    }
}

function sendEmail() {
    if(isset($_POST['email'])) {


        $email_to = "rallend99@gmail.com";

        $email_subject = "Bareænder-kunde";





        function died($error) {

            // your error code can go here

            echo "We are very sorry, but there were error(s) found with the form you submitted. ";

            echo "These errors appear below.<br /><br />";

            echo $error."<br /><br />";

            echo "Please go back and fix these errors.<br /><br />";

            die();

        }



        // validation expected data exists

        if(!isset($_POST['first_name']) ||

            !isset($_POST['last_name']) ||

            !isset($_POST['email']) ||

            !isset($_POST['telephone']) ||

            !isset($_POST['comments'])) {

            died('We are sorry, but there appears to be a problem with the form you submitted.');       

        }



        $first_name = escapeHTML($_POST['first_name']); // required

        $last_name = escapeHTML($_POST['last_name']); // required

        $email_from = escapeHTML($_POST['email']); // required

        $telephone = escapeHTML($_POST['telephone']); // not required

        $comments = escapeHTML($_POST['comments']); // required



        $error_message = "";

        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

      if(!preg_match($email_exp,$email_from)) {

        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

      }

        $string_exp = "/^[A-Za-z .'-]+$/";

      if(!preg_match($string_exp,$first_name)) {

        $error_message .= 'The First Name you entered does not appear to be valid.<br />';

      }

      if(!preg_match($string_exp,$last_name)) {

        $error_message .= 'The Last Name you entered does not appear to be valid.<br />';

      }

      if(strlen($comments) < 2) {

        $error_message .= 'The Comments you entered do not appear to be valid.<br />';

      }

      if(strlen($error_message) > 0) {

        died($error_message);

      }

        $email_message = "Form details below.\n\n";



        function clean_string($string) {

          $bad = array("content-type","bcc:","to:","cc:","href");

          return str_replace($bad,"",$string);

        }



        $email_message .= "First Name: ".clean_string($first_name)."\n";

        $email_message .= "Last Name: ".clean_string($last_name)."\n";

        $email_message .= "Email: ".clean_string($email_from)."\n";

        $email_message .= "Telephone: ".clean_string($telephone)."\n";

        $email_message .= "Comments: ".clean_string($comments)."\n";



    // create email headers

    $headers = 'From: '.$email_from."\r\n".

    'Reply-To: '.$email_from."\r\n" .

    'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);  


    }
}




?>