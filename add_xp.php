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


	 if (!empty($_POST['submit'])) { 	
 			if ($new_user_xp = $User->add_xp($_POST['id'], $_POST['xp'])) {
 			echo "Dodano xp";}
 			}

		 if (!empty($_POST['submit2']))  {	
 			if ($new_user_xp2 = $User->quest($_POST['id'], $_POST['quest'])){ 
 			echo "Quest zaliczony";}
		
 	  }

 ?>
 <? if (empty($_POST['submit']) && empty($_POST['submit2'])) { ?>
	Działa i zostanie zmienione na listę:
	<form action="" method="POST">
	<select name="quest">
	<option value="1">kupa</option>
	<option value="2">siku</option>
	<option value="3">rzyg</option>
	<input type="submit" name="submit2" value="Zmień">
	<input type="hidden" name="id" value="<?=$_GET['id']?>">
	</select>
	</form>
	Działa:
	<form action="" method="POST">
		Xp: <input type="text" name="xp"><br>
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="submit" name="submit" value="Zmień">
	</form>
	<?  } ?>
	<br>
	<a href="index.php">Powrót do listy levelowców</a>
	</body>
</html>