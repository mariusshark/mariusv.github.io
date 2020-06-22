<?php
if (isset($_POST['submit']) $_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
    
 $to = 'mariusvolung@gmail.com';
 $subject = "New Message on Marius Porfolio";
 $message = "Name:".$name."\n". "Wrote the following: "."\n\n".$message;
 $headers = "from: ".$email;     
 if(mail($to, $subject, $message, $headers )){
     echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
     
 }
    else{
        echo "Something went wrong! ";}
    }
    
 

?>
