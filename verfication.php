<?php
    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code']) && !empty($_GET['code'])){
        require('./config.php');
        $email=$_GET['email'];
        $refcode=$_GET['code'];
        $sql="SELECT * FROM users WHERE webmail= '".$email."'";
        $res=$mysqli->query($sql);
        if($res->num_rows > 0){
            $row = $res->fetch_assoc();
            if(($row['refcode'] != $refcode) || ($row['active'] == 1)){
                echo "Invalid session";
            }
            else{
                $check = "UPDATE users SET active = 1 WHERE webmail= '".$email."'";
                $confirm=$mysqli->query($check);
                // echo "Verified!";
                // sleep(3);
                $subject = "Your referral Code from E-Cell IIT Patna";
                $message="Verified!. This is your referral code ".$refcode.". Invite more of your friends with referral code to win exciting goodies from E-Cell IIT Patna.";
                require('mail.php');
                header("Location: ./signin/signin.php");
            }
        }
        else{
            echo "Invalid session";
        }
    }
?>