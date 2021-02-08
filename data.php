<?php
 
 


if(isset($_POST['submit']))
 {
      $firstname = $_POST['first_name']; 
      $Lastname = $_POST['last_name']; 
 
   $email = $_POST['email'];
   $phone = $_POST['mobile'];
   $website = $_POST['Website'];

   $Country= $_POST['Country'];
   
  

    
   $message = $_POST['message'];
  
  //  $message = wordwrap($message,70);
   
   $html1 = "<html><body>
          <div id='appointmentTemplate' style='width:100%; background-color:#fff; padding:20px;'>
                <div id='templateInner' style='margin:auto; width:70%; background-color:white; padding:20px;'>
                 Dear PCL,<br>
                 Someone has Contact  request for you. Here are the details:
                 <hr>
                
                 <span><b>First Name </b>: ".$firstname."</span> <br>
                 <span><b>Last Name</b>: ".$Lastname."</span> <br>
                 <span><b>Email</b>: ".$email."</span><br>
				  <span><b>Phone</b>:<a href='tel:".$phone."'>".$phone."</a> </span><br>
				  <span><b>Website</b>: ".$website."</span><br>
				  <span><b>Country</b>: ".$Country."</span><br>
                 
                 <span><b>Message</b>: ".$message."</span><br>
                
                 <hr>
                 Thanks.<br>
               
                </div>
           </div>
         </body></html>";


         $headers = "From:PCL;\r\nContent-Type: text/html;\r\n charset=ISO-8859-1;";
   
   $mailSend = mail('aman.pcltechnologies@gmail.com','Appointment Request.', $html1, $headers);
   header("Location: thankyou.php"); 



		//  print_r($html1);
		//  die();
  //  $headers .= "MIME-Version: 1.0\r\n";
  // $headers = "From: Dr_Sfurti_Mann_Website;.\r\nContent-Type: text/html;\r\n charset=ISO-8859-1;";
   
   
   
        //    $headers = 'From: Dr_Sfurti_Mann_Website\r\n'.
            
        //        'X-Mailer: PHP/' . phpversion() . "\r\n" .
        //        "MIME-Version: 1.0\r\n" .
        //        "Content-Type: text/html; charset=utf-8\r\n" .
        //        "Content-Transfer-Encoding: 8bit\r\n\r\n";

        //$mailSend = mail('ichelonconsulting@gmail.com','anantahealthclinic@gmail.com','Appointment Request.', $html1, $headers);






        // use PHPMailer\PHPMailer\PHPMailer;
        // use PHPMailer\PHPMailer\Exception;
        
        

            //Include PHPMailer library files;
            // require '/phpmailer/Exception.php';
            // require '/phpmailer/PHPMailer.php';
            // require '/phpmailer/SMTP.php';
            // require '/phpmailer/Autoload.php';

            //require '/PHPMailer/src/Autoload.php';


            // require 'PHPMailerAutoload.php';
            
            // $mail = new PHPMailer;
            // // SMTP configuration
            // $mail->isSMTP();
            // $mail->Host     = 'smtp.gmail.com';
            // //$mail->Host     = 'smtp.dermcosskincare.com';
            // $mail->SMTPAuth = true;
            // $mail->Username = 'aman.pcltechnologies@gmail.com';
            // $mail->Password = 'amanpcl123';
            // $mail->SMTPSecure = 'tls';
            // $mail->Port     = 587;




            // $mail->setFrom('aman.pcltechnologies@gmail.com','dermcosskincare');
            // $mail->addReplyTo('aman.pcltechnologies@gmail.com','dermcosskincare');

            // // Add a recipient
            // $mail->addAddress('amanichelon@gmail.com');
            // //$mail->addAddress('info@dermcosskincare.com');
            // //$mail->addAddress('ichelonconsulting@gmail.com');

            // // Add cc or bcc 
            // //$mail->addCC('cc@example.com');
            // //$mail->addBCC('bcc@example.com');

            // // Email subject
            // $mail->Subject = 'dermcosskincare contactfrom';

            // // Set email format to HTML
            // $mail->isHTML(true);

            // // Email body content

            // $mail->Body =  $html1;

            // // Send email
            // if(!$mail->send()){
            //     echo 'Message could not be sent.';
            //     echo 'Mailer Error: ' . $mail->ErrorInfo;
            // }
            // //else
            // // {
            // // 	header("Location:thankyou.php");
            // // }





            // $mailSend = mail('amanichelon@gmail.com','gautamnaresh96@gmail.com','anantahealthclinic@gmail.com','Appointment Request.', $html1, $headers);



            //   header("Location:thankyou.php"); 	



 }
