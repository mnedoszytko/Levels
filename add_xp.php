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
	
	 if ($_POST['submit'])  {	
			if ($new_user_xp = $User->add_xp($_POST['id'], $_POST['xp'])) {
			echo "Dodano xp";
	} else if ($_POST['submit2'])  {	
			if ($new_user_xp2 = $User->add_xp($_POST['id'], $_POST['xp'])) {
			echo "Dodano xp";
	 } else {
	
		
		echo "Nie udało się dodać xp";
	}
}
// nie rozumiem, czemu nic sie nie dzieje jak wybieram gorna opcje. Secjalnie wstawiłem dokładnie to samo, by mieć pewność że bedzie działać.
?>
<br>
<a href="index.php">Powrót do listy levelowców</a>			
	<? }else { ?>
	Nie działa:
	<form action="" method="POST">
		Xp: <input type="text" name="xp"><br>
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="submit" name="submit2" value="Zmień">
	</form>
	Działa:
	<form action="" method="POST">
		Xp: <input type="text" name="xp"><br>
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="submit" name="submit" value="Zmień">
	</form>
	<?  } ?>
	</body>
</html>