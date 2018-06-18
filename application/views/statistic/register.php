<?php
session_start();


header( "refresh:5;url=admin.php" );

echo 'You\'ll be redirected in about 5 secs. If not, click <a href="admin.php">here</a>.';
?>
<A HREF="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ')">ออกจากระบบ</A>
<script language='javascript'> 
function confirm_logout() 
{ 
var yes=confirm('Do you want to logout?'); 
if (yes) 
return true ; 
else 
return false ; 
}