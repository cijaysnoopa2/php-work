<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Sessions</title>
</head>
<body>

<?php
// Set session variables
$_SESSION['first_name'] = "Chol";
$_SESSION['last_name'] = "Ajak";
?>
<?php
$name = $_SESSION['first_name']." ". $_SESSION['last_name'];
echo $name;
?>

</body>
</html> 

