<?php
session_start();
require_once 'header.php';
echo "<div class='center'>Welcome to SocialBox,";
if($loggedin) echo "$user, you are logged in";
else echo ' Please Sign up or Log in';
echo <<<_END
</div><br>
</div>
<div data-role="footer">
<h4 style="text-align:center">Thankyou for Visiting. All rights reserved.</h4>
</div>
</body>
</html>
_END;
?>