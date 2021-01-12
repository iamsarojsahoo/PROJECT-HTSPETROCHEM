<?php 
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        
        $to='sarojcse.mail@gmail.com';
        $subject='Contact us submition';
        $message=
        "Name: ".$name."\n".
        "email: ".$email."\n".
        "subject: ".$subject."\n". 
        "Wrote the following: "."\n\n".$message;
        $headers="Form: ".$email;
        
        if(mail($to,$subject, $message, $headers)){
            // echo "<h1>Sent successfully"." ".$name.", we ill contact you later</h1>";
            echo"<script>alert('Thank you "." ".$name." .we will contact you later ');window.location='contact.html';</script>";
        }
        else{
            echo "something went wrong";
        }
    }
?>