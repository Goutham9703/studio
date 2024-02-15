<?php 
function isValidEmail($email){ 
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
if(isset($_POST['action']) && $_POST['action']=='contact'){
    $to = "studio@cassixcom.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $msz1='Name: '.$name.',<br>';
	$msz1.='E-Mail: '.$from.',<br>';
	$msz1.='Mobile: '.$_POST['phone'].',<br>';
	$msz1.='Comment: '.$_POST['message'].',<br>';
    
    require("phpmailer/class.phpmailer.php");
    
    if(isValidEmail($from)==false){
        echo "<div class='alert alert-danger'>Email not valid.</div>";
        exit;
    }

		$message = $msz1;
		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->Host = 'localhost';
		$mailer->Port = 25; //can be 587
		$mailer->SMTPAuth = false;
		$mailer->SMTPDebug = 0;
		// Change this to your gmail address
		$mailer->Username = 'info@cassixcom.com';  
		// Change this to your gmail password
		$mailer->Password = 'hello@123456789';  
		// Change this to your gmail address
		$mailer->From = $from;
		// This will reflect as from name in the email to be sent
		$mailer->FromName = $name; 
		$mailer->Body = $message;
		$mailer->IsHTML(true);
		$mailer->Subject = $subject;
		// This is where you want your email to be sent
		$mailer->AddAddress($to);  
		if(!$mailer->Send())
		{
		    echo "Message was not sent<br/ >";
		    echo "Mailer Error: " . $mailer->ErrorInfo;
		}
		else
		{
		    // echo "Message has been sent";
            echo 1;
		}

}
if(isset($_POST['action']) && $_POST['action']=='quotes'){
    $to = "studio@cassixcom.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Quotes submission";
    $msz1='Name: '.$name.',<br>';
	$msz1.='E-Mail: '.$from.',<br>';
	$msz1.='Mobile: '.$_POST['phone'].',<br>';
	$msz1.='Comment: '.$_POST['message'].',<br>';
    
    require("phpmailer/class.phpmailer.php");
    
    if(isValidEmail($from)==false){
        echo "<div class='alert alert-danger'>Email not valid.</div>";
        exit;
    }

		$message = $msz1;
		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->Host = 'localhost';
		$mailer->Port = 25; //can be 587
		$mailer->SMTPAuth = false;
		$mailer->SMTPDebug = 0;
		// Change this to your gmail address
		$mailer->Username = 'info@cassixcom.com';  
		// Change this to your gmail password
		$mailer->Password = 'hello@123456789';  
		// Change this to your gmail address
		$mailer->From = $from;
		// This will reflect as from name in the email to be sent
		$mailer->FromName = $name; 
		$mailer->Body = $message;
		$mailer->IsHTML(true);
		$mailer->Subject = $subject;
		// This is where you want your email to be sent
		$mailer->AddAddress($to);  
		if(!$mailer->Send())
		{
		    echo "Message was not sent<br/ >";
		    echo "Mailer Error: " . $mailer->ErrorInfo;
		}
		else
		{
		    // echo "Message has been sent";
            echo 1;
		}

}
if(isset($_POST['action']) && $_POST['action']=='subscribe'){
    $to = "studio@cassixcom.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Subscribe submission";
    $msz = $from . " Subscribed.";
    
    require("phpmailer/class.phpmailer.php");


    if(isValidEmail($from)==false){
        echo "<div class='alert alert-danger'>Email not valid.</div>";
        exit;
    }
		$message = $msz;
		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->Host = 'localhost';
		$mailer->Port = 25; //can be 587
		$mailer->SMTPAuth = false;
		$mailer->SMTPDebug = 0;
		// Change this to your gmail address
		$mailer->Username = 'info@cassixcom.com';  
		// Change this to your gmail password
		$mailer->Password = 'hello@123456789';  
		// Change this to your gmail address
		$mailer->From = 'info@cassixcom.com';
		// This will reflect as from name in the email to be sent
		$mailer->FromName = 'Cassixcom Team'; 
		$mailer->Body = $message;
		$mailer->IsHTML(true);
		$mailer->Subject = $subject;
		// This is where you want your email to be sent
		$mailer->AddAddress($to);  
		if(!$mailer->Send())
		{
		    echo "Message was not sent<br/ >";
		    echo "Mailer Error: " . $mailer->ErrorInfo;
		}
		else
		{
		    // echo "Message has been sent";
            echo "<div class='alert alert-success'>Thanks for subscribe.</div>";
		}
    
}
?>