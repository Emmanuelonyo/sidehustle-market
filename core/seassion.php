<?php

include 'core/config.php';


// check if session exist 

if (!isset($_SESSION['Access']) && !isset($_SESSION['loginid'])){

        header('location: login.php');

}else{

        $userid = $_SESSION['loginid'];
$user = $conn->query("SELECT * FROM users WHERE email='$userid' or username = '$userid' ");

$userdata = $user->fetch_array();
$email = $userdata['email'];
}



?>