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
	/*
	znowu robisz to samo przekazujac parametry (patrz adnotacje w edit_dude.php)
	i ten sam error, mieszając $_POST i $_GET
	*/
	
	
	 if (isset($_POST['submit']))  {	
			if ($new_user_xp = $User->add_xp($id = $_GET['id'], $xp = $_POST['xp'])) {
			echo "Dodano xp";
	} else {
	
		
		echo "Nie udało się dodać xp";
		echo "\$new_user_xp = ";
		var_dump($new_user_xp);
	}
?>
<br>
<a href="index.php">Powrót do listy levelowców</a>			
	<? }else { ?>
	Ile xp chcesz dodać?
	<form action="" method="POST">
		Xp: <input type="text" name="xp"><br>
		<input type="submit" name="submit" value="Zmień">
	</form>
	<?  } ?>
	</body>
</html>
