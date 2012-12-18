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
	 var_dump($_POST['submit2']);


	 if (!empty($_POST['submit']))  {	
	 echo "Jest _POST[submit]";
			if ($new_user_xp = $User->add_xp($_POST['id'], $_POST['xp'])) {
			echo "Dodano xp";
	} else {
		echo "pusty byl _POST[submit]";
		if (!empty($_POST['submit2']))  {
	die("JEST submit 2");	
			if ($new_user_xp2 = $User->add_xp($_POST['id'], $_POST['xp'])) {
			echo "Dodano xp";
		}
	 } else {
	
		echo "nie ma ani post_submit ani submit2";
		echo "Nie udało się dodać xp";
	}
}
// nie rozumiem, czemu nic sie nie dzieje jak wybieram gorna opcje. Secjalnie wstawiłem dokładnie to samo, by mieć pewność że bedzie działać.

//pojebales klamry zamykające, zwroc uwagę, że jak najedziesz w codzie na klamrę otwierającą to podświetli ci się gdzie się ona konczy, mowie tutaj o linii 17, konczy ci sie w linii 41, czyli wszystko to co jest pomiedzy wywola sie tylko jesli $_POST submit jest niepuste (czyli pierwszy formularz byl ogloszony), rowniez nie sprobuje nawet sprawdzic czy $_POST[submit2] jest niepusty (na linii 23 , poniewaz ten warunek jest sprawdzany tylko kiedy $_POST[submit] byl niepusty...nie poprawiam, zebys zobaczyl gdzie wstawic nawias i co zrobic z linią 40

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