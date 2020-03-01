<?php
    session_start();
    session_destroy();
    header("location:/ecell/signin/signup.php");
?>