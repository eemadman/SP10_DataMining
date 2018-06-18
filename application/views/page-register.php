<html>
<body>
Welcome <?php echo $_SESSION['username']; ?>,
 <a href="logout.php">logout</a> 
</body>
</html> 
<?php
session_start();
unset($_SESSION['username']);
session_destroy();

header("Location: login.php");
exit;
?>
