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
 			if ($new_user_xp = $User->add_xp($_POST['id'], $_POST['xp'], $_POST['quest'], $_POST['date'])) {
 			echo "Dodano xp";}
 			}

		 if (!empty($_POST['submit2']))  {	
 			if ($new_user_xp2 = $User->quest($_POST['id'], $_POST['quest'], $_POST['date'])){ 
 			echo "Quest zaliczony";}
		
 	  }

 ?>
 <? if (empty($_POST['submit']) && empty($_POST['submit2'])) { ?>
	Wybierz z listy:
	<form action="" method="POST">
	<select name="quest">
	<option value="1">Napisał</option>
	<option value="2">Stworzył</option>
	<option value="3">Zaprogramował</option>
	<input type="submit" name="submit2" value="Dodaj xp">
	<input type="hidden" name="id" value="<?=$_GET['id']?>">
	<input type="hidden" name="date" value="<?=date("Y-m-d")." - ".date("H:i:s")?>">
	</select>
	</form>
	Lub wpisz manualnie:
	<form action="" method="POST">
		Xp: <input type="text" name="xp"><br>
		Za co: <input type="text" name="quest">
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="hidden" name="date" value="<?=date("Y-m-d")." - ".date("H:i:s")?>">
		<br><input type="submit" name="submit" value="Dodaj xp">
	</form>
	<?  } ?>
	<br>
	<a href="index.php">Powrót do listy levelowców</a>
	</body>
</html>