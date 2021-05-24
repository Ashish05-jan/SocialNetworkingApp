<?php 
require_once 'functions.php';
if(isset($_POST['user']))
{
    $user = sanitizestring($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");
    if($result->num_rows)
    echo "<span class='taken'>&nbsp;&#x2718;".
    "The Username '$user' is already taken</span>;
    else
        echo "<span class='available'>&nbsp;&#x2714;".
        "The Username '$user' is available</span>";           
}
?>