<?php

include"head.php";

?>

<?php
if(isset($_POST['submit']))
 {
      $name = $_POST['name']; 
 
   $email = $_POST['email'];
   $phone = $_POST['mobile'];

   $doctor= $_POST['doctor'];
   $date = $_POST['date'];
  

    
   $message = $_POST['message'];
  
   $message = wordwrap($message,70);
   
   $html1 = "<html><body>
          <div id='appointmentTemplate' style='width:100%; background-color:#fff; padding:20px;'>
                <div id='templateInner' style='margin:auto; width:70%; background-color:white; padding:20px;'>
                 Dear dermcosskincare,<br>
                 Someone has Contact  request for you. Here are the details:
                 <hr>
                
                 <span><b>Lname</b>: ".$name."</span> <br>
                 <span><b>Email</b>: ".$email."</span><br>
				  <span><b>Phone</b>:<a href='tel:".$phone."'>".$phone."</a> </span><br>
				  <span><b>Doctor</b>: ".$doctor."</span><br>
				  <span><b>Date</b>: ".$date."</span><br>
                 
                 <span><b>Message</b>: ".$message."</span><br>
                
                 <hr>
                 Thanks.<br>
                 Website Url: http://www.dermcosskincare.com/
                </div>
           </div>
         </body></html>";



		 print_r("$html1");
		 die();
  //  $headers .= "MIME-Version: 1.0\r\n";
  // $headers = "From: Dr_Sfurti_Mann_Website;.\r\nContent-Type: text/html;\r\n charset=ISO-8859-1;";
   
   
   
//    $headers = 'From: Dr_Sfurti_Mann_Website\r\n'.
       
//        'X-Mailer: PHP/' . phpversion() . "\r\n" .
//        "MIME-Version: 1.0\r\n" .
//        "Content-Type: text/html; charset=utf-8\r\n" .
//        "Content-Transfer-Encoding: 8bit\r\n\r\n";

 //$mailSend = mail('ichelonconsulting@gmail.com','anantahealthclinic@gmail.com','Appointment Request.', $html1, $headers);









// Include PHPMailer library files
// require 'PHPMailer/Exception.php';
// require 'PHPMailer/PHPMailer.php';
// require 'PHPMailer/SMTP.php';
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
//$mail->Host     = 'smtp.dermcosskincare.com';
$mail->SMTPAuth = true;
$mail->Username = 'aman.pcltechnologies@gmail.com';
$mail->Password = 'amanpcl123';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;




$mail->setFrom('aman.pcltechnologies@gmail.com','dermcosskincare');
$mail->addReplyTo('aman.pcltechnologies@gmail.com','dermcosskincare');

// Add a recipient
$mail->addAddress('amanichelon@gmail.com');
//$mail->addAddress('info@dermcosskincare.com');
//$mail->addAddress('ichelonconsulting@gmail.com');

// Add cc or bcc 
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Email subject
$mail->Subject = 'dermcosskincare contactfrom';

// Set email format to HTML
$mail->isHTML(true);

// Email body content

$mail->Body =  $html1;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
//else
// {
// 	header("Location:thankyou.php");
// }





// $mailSend = mail('amanichelon@gmail.com','gautamnaresh96@gmail.com','anantahealthclinic@gmail.com','Appointment Request.', $html1, $headers);



//   header("Location:thankyou.php"); 	


 }

?>  


<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#container').easyTabs({defaultContent:1});
		});
	</script>
    
    <script language="javascript">

 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
 function lettersOnly(evt) {
        evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
        if (charCode == 32)
            return true;
        if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
            return false;
        }
        else
            return true;
    }

function is_email(email)
    {
        if(!email.match(/^[A-Za-z0-9\._\-+]+@[A-Za-z0-9_\-+]+(\.[A-Za-z0-9_\-+]+)+$/))
            return false;
        return true;
    }
function appointment_validation()
{
	
  if(document.appointment.name.value=="")
  {
    alert("Please enter your  Name");
	document.appointment.name.value="";
	document.appointment.name.focus();
	return false;
  }
  

  if(document.appointment.email.value=="")
  {
    alert("Please enter your Email");
	document.appointment.email.value="";
	document.appointment.email.focus();
	return false;
  }
 if(!is_email(document.appointment.email.value))
 {
    alert('Invalid Email Address');
	document.appointment.email.value="";
	document.appointment.email.focus();
	return false;
  }
  if(document.appointment.mobile.value=="")
  {
    alert("Please enter your Mobile no");
	document.appointment.mobile.value="";
	document.appointment.mobile.focus();
	return false;
  }
 if(isNaN(document.appointment.mobile.value))
   {
		 alert('Mobile number must be numeric ');
		document.appointment.mobile.focus();
		 return false;
  }

   if(document.appointment.mobile.value.length<'10')
  {
    alert(" Mobile no not less then ten digit");
	document.appointment.mobile.value="";
	document.appointment.mobile.focus();
	return false;
  }
  
	if(document.appointment.doctor.value=="-99999")
  {
    alert("Please select doctor");
	document.appointment.doctor.value="";
	document.appointment.doctor.focus();
	return false;
  }  
  if(document.appointment.dateofapp.value=="")
  {
    alert("Please enter your appointment date");
	document.appointment.dateofapp.value="";
	document.appointment.dateofapp.focus();
	return false;
  }  
  
   if(document.appointment.timeofapp.value=="-999")
  {
    alert("Please enter your appointment time");
	document.appointment.timeofapp.value="";
	document.appointment.timeofapp.focus();
	return false;
  } 

  if(document.appointment.message.value=="")
  {
    alert("Please enter you Query");
	document.appointment.message.value="";
	document.appointment.message.focus();
	return false;
  }
  if(document.appointment.message.value.length>=150)
  {
    alert("Maximum 250 Character allowed");
	document.appointment.message.value="";
	document.appointment.message.focus();
	return false;
  }


  return true;
}
</script>


<div class="container">
    <div class="row ">
		
	<h1 class="text-center pinks"   style=" padding-top: 108px;" >Book An Appointment</h2>
    
      <form id="appointment" name="appointment" method="post" action="appointmentprocess.php" onSubmit="return appointment_validation();" enctype="multipart/form-data" class="menu">
    <div class="row">
        <div class="col-sm-6 col-md-6">
        
  <div class="form-group">
    <label for="Name" class="col-sm-3 control-label">Name:</label>
    <div class="col-sm-9">
      <input type="name" class="form-control" id="name" name="name" placeholder="Madhur Gupta">
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="form-group">
    <label for="Email" class="col-sm-3 control-label">Email:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="email" name="email" placeholder="madhurgupta@gmail.com">
    </div>
    <div class="clearfix"></div>
  </div>
   
   <div class="form-group">
    <label for="mobileno" class="col-sm-3 control-label">Select Doctor/Therapist:</label>
    <div class="col-sm-9">
      <select class="form-control down-arrow" name="doctor" id="doctor" >
      
              <option value="">Select Doctor's</option>
						<option value="Dr. Ramanjit Singh">Dr. Ramanjit Singh</option>
						<option value="Dr. Ashit Gupta">Dr. Ashit Gupta</option>
						<option value="Dr. Rinky Sharma(Sat-Sun)(10.30 AM to 1.30 PM)">Dr. Rinky Sharma(Sat-Sun)(10.30 AM to 1.30 PM)</option>
				        <option value="Dr. Vimmi Kashyap(Mon-Sat)(10.30 AM to 4.30 PM)">Dr. Vimmi Kashyap(Mon-Sat)(10.30 AM to 4.30 PM)</option>
              </select>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="form-group box">
    <!-- <label for="Email" class="col-sm-3 control-label">Select Time:</label>
    <div class="col-sm-9">
     <select class="form-control down-arrow" name="timeofapp" id="timeofapp">
 
			<option value="-999">Select Time</option>
			<option value="10AM–1PM">10AM–1PM</option>
			<option value="1PM–3PM">1PM–3PM</option>
			<option value="3PM–7PM">3PM–7PM</option>
			
		
			
      </select>
     
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="form-group box" style="display:none;">
    <label for="Email" class="col-sm-3 control-label">Select Time:</label>
    <div class="col-sm-9">
     <select class="form-control down-arrow" name="timeofapp" id="timeofapp">
 
			<option value="-999">Select Time</option>
			<option value="10AM–1PM">10AM–1PM</option>
			<option value="1PM–3PM">1PM–3PM</option>
			<option value="3PM–7PM">3PM–7PM</option>
			
		
			
      </select>
     
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="form-group box" style="display:none;">
    <label for="Email" class="col-sm-3 control-label">Select Time:</label>
    <div class="col-sm-9">
     <select class="form-control down-arrow" name="timeofapp" id="timeofapp">
 
			<option value="-999">Select Time</option>
			<option value="10AM–1PM">10AM–1PM</option>
			<option value="1PM–3PM">1PM–3PM</option>
			<option value="3PM–7PM">3PM–7PM</option>
			
		 -->
			
      </select>
     

    </div>
    <div class="clearfix"></div>
  </div>
    </div>
        <div class="col-sm-6 col-md-6">
   <div class="form-group">
    <label for="Name" class="col-sm-3 control-label">Select Date:</label>
    <div class="col-sm-9">
    <input name="date" id="dateofapp" class="dateofapp form-control" type="date"/>
   </div>
    <div class="clearfix"></div>
  </div>
  
  <div class="form-group">
    <label for="mobileno" class="col-sm-3 control-label">Mobile No.:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="+91 98714356..">
    </div>
    <div class="clearfix"></div>
  </div>
   <div class="form-group">
    <label for="mobileno" class="col-sm-3 control-label">Message:</label>
    <div class="col-sm-9">
       <textarea class="form-control" name="message" id="message" rows="4"></textarea>
    </div>
    <div class="clearfix"></div>
  </div>
  
    </div>
    </div>
        <div class="row">
            <p class="text-center">
            <button type="submit" name="submit" value="send" class="submit btn btn-default">Book</button>
            </p>
        </div>
    </form>
</div>
</div>
<div class="container">
<div class="row">
<p>* for same day appointments - connect with us at - +91-9910124566</p>
</div>
</div>

		<?php
		include"footer.php";
		?>