<?php 
if(isset($_POST['action']) && $_POST['action']=='quotes'){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $designation= $_POST['designation'];

 
    $template .= '<br />Spacestyling.' . '<br />';

    $to = 'ui-uxdesign@cassixcom.com';
 
    // subject
    $subject = 'Contact-SpaceStyle';
    
    // message
     //$message.="<b>subject</b> : ". $subject . "\r\n";
    $message="User Name : ". $name . "\r\n";	
    $message.="<br>Email : ". $email . "\r\n";
    $message.="<br>Designation : ". $designation . "\r\n";
   
    //$message.="Message : ". $tet_message . "\r\n";
    
    $headers = "From: ui-uxdesign@cassixcom.com\r\n";
    $headers .= "Reply-To: ui-uxdesign@cassixcom.com\r\n";
    // $headers .= "CC: susan@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    
    if(mail($to, $subject, $message, $headers)){
        echo "<div class='alert alert-success'>Your enquire submitted successfully, our support team will contact you shortly.</div>";
    }else{
        echo "<div class='alert alert-danger'>Some error occured! try again after some time.</div>";
    }
    
    // $name = $_POST['name'];
    // $email= $_POST['email'];
    // $message= $_POST['designation'];
    // $to = "ui-uxdesign@cassixcom.com";
    // $subject = "Mail From website";
    // $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    // $headers = "From: ui-uxdesign@cassixcom.com" . "\r\n" .
    // "CC: ui-uxdesign@cassixcom.com";
    // if($email!=NULL){
    //     mail($to,$subject,$txt,$headers);
    // } 
    // if(mail($to, $subject, $template, $headers)){
    //     echo "<div class='alert alert-success'>Your enquire submitted successfully.</div>";
    // }else{
    //     echo "<div class='alert alert-danger'>Some error occured! try again after some time.</div>";
    // }
}

    // echo $template;
 
?>