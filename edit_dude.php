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
	if (isset($_POST['submit']))  {	
			if ($new_user_name = $User->edit_user($_POST['id'], $_POST['name'])) {
			echo "Zmieniono name";
	} else {
		echo "Nie udało się zmienić name";
	}
?>
<br>
<a href="index.php">Powrót do listy levelowców</a>			
	<? }else { ?>
	Na co chcesz zmienić obecny nick?
	<form action="" method="POST">
		Name: <input type="text" name="name"><br>
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="submit" name="submit" value="Zmień">
	</form>
	<?  } ?>
	</body>
</html>
