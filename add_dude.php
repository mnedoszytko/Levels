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
	<? if (isset($_POST['submit']))  {
//	$users = $User->add_user($username = $_POST['name']);
//jesli nie uzywasz nigdzie indziej zmiennej $username to jest niepotrzebne, to co przekazesz do nawiasu, staje się zmienną zdefiniowaną w funkcji
$users = $User->add_user($_POST['name']);
	echo "Dodano levelowca";
	// Wyświetla się wszystko ładnie pięknie, wszystkie strony tak jak powinno, tyle że nie dodaje zioma
?>
<br>
<a href="index.php">Powrót do listy levelowców</a>		
<br>
<a href="add_dude.php">Dodaj kolejnego levelowca</a>
	
	<? }else { ?>
	Jak nazwiesz nowego levelowca?
	<form action="" method="POST">
		Name: <input type="text" name="name"><br>
		<input type="submit" name="submit" value="Dodaj">
	</form>
	<?  } ?>
	</body>
</html>
