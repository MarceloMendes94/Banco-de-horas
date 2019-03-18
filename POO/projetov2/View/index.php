<?php 
    if(isset($_SESSION['login'])){
        // go to page 
    }
    else{
        // go to login
        header('Location: login.php');
    }
?>