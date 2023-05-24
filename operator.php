<?php
            if(isset($_POST['submit'])){
                $mymail = 'info@alpherlimited.com';
                $username = $_POST['uname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
        
                $subject = 'New form submission';
                $subject2 = 'Mail from Demo';

                $message = "Username: $username \n" . "Phone:  $phone";
                $message2 = "You just completed an application with Demo ltd";

                $header = 'Application for Demo';
                $header2 = "Application Update";
    
                $sendmail = mail($mymail, $subject, $message, $header);
                $sendmail2 = mail($email, $subject2, $message2, $header2);
    
                if(($sendmail && $sendmail2) == true){
                    echo('Application Successful');
                }else{
                    echo('An error occur while sending your application, pls try again!');
                }
            }
?>
