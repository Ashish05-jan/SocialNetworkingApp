<?php
@session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href=href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" >
<link rel="icon" href="favicon2.ico">
<link rel='stylesheet' href='style.css'>
<script src='javascript.js'></script>
<script src='jquery-2.2.4.min.js'></script>
<script src='jquery.mobile-1.4.5.min.js'></script>
_INIT;
require_once 'functions.php';
$userstr = 'Welcome Guest';
if(isset($_SESSION['user']))
{
    $user = $_SESSION['user'];
    $loggedin = True;
    $userstr = "Logged in as: $user";
}
else $loggedin = false;
echo <<<_MAIN
<title> SocialBox $userstr</title>
</head>
<body>
<div data-role='page'>
<div data-role='header'>
<div id = 'logo' class = 'center'>SocialBox
<img id = 'robin' src = 'icon.png' align="middle" width="250" height="300"></div>
<br/>
<div class='username'>$userstr</div>
</div>
<div data-role='content'>
_MAIN;
if($loggedin){
    echo <<<_LOGGEDIN
    <br/>
    <div class = 'center'>
    <a data-role='button' data-inline='true' data-icon='home'
    data-transition="slide" href='members.php?view=$user'>Home</a>
    <a data-role='button' data-inline='true'
    data-transition="slide" href = 'members.php'>Members</a>
    <a data-role='button' data-inline='true'
    data-transition="slide" href = 'friends.php'>Friends</a>
    </div>
    <br/>
    <div class='center'>
    <a data-role='button' data-inline='true'
    data-transition="slide" href = 'messages.php'>Messages</a>
    <a data-role='button' data-inline='true'
    data-transition="slide" href = 'profile.php'>Edit Profiles</a>
    <a data-role='button' data-inline='true'
    data-transition="slide" href = 'logout.php'>Log Out</a>
    </div>
    <br/>
    _LOGGEDIN;
}
else{
    echo <<<_GUEST
    <br/>
    <div class='center'>
    <a data-role='button' data-inline='true' data-icon='home'
    data-transition="slide" href = 'index.php'>Home</a>
    <a data-role='button' data-inline='true' data-icon='plus'
    data-transition="slide" href = 'signup.php'>Sign Up</a>
    <a data-role='button' data-inline='true' data-icon='check'
    data-transition="slide" href = 'login.php'>Log In</a>
    </div>
    <p class='info'>You Must be Logged In to Use this App</p>
    _GUEST;
}
?>
