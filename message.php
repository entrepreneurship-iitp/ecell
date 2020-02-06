<?php
    require('./config.php');
    if(isset($_POST['name']) && !empty($_POST['email']) AND isset($_POST['subject']) && !empty($_POST['message'])){
        
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $subject=$_POST['subject'];
        $sql="  INSERT INTO messages "."VALUES('$name','$email','$subject','$message')";
        if ($mysqli->query($sql) === TRUE) {
            echo "Message Sent!";
        } else {
            echo "Error!";
        }
        
        $mysqli->close();
    }
?>