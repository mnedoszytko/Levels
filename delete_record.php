<?
error_reporting(E_ALL);
ini_set('error_reporting','On');
include('User.class.php');
$User = new User();
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<title></title>
	</head>
	<body>	
	<?
	$users = $User->delete_record($id=$_GET['id']);
	echo "Usunięto rekord";
	?>
	<a href="index.php">Powrót</a>
	</body>
</html>