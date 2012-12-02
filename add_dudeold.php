<?
error_reporting(E_ALL);
ini_set('error_reporting','On');
$link = mysql_connect('localhost', 'level', 'level');
mysql_select_db("levelowanie",$link);
mysql_query("SET NAMES utf8");
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
	</head>
	<body>
	<? if (isset($_POST['submit']))  { ?>
		
	<?
	$q = "INSERT INTO users (name,xp,lvl,lvl_name) VALUES ('$_POST[name]','0','0','dupa')";

if(mysql_query($q)) {
echo "Dodano levelowca";
?>
<br>
<a href="index.php">Powrót do listy levelowców</a>
<?	
} else {	
	echo "Błąd";
	echo mysql_error();
}
	?>		
	<br>
	<a href="add_dude.php">Dodaj kolejnego levelowca</a>
	
	<? } else { ?>
	Jak nazwiesz nowego levelowca?
	<form action="" method="POST">
		Name: <input type="text" name="name"><br>
		<input type="submit" name="submit" value="Dodaj">
	</form>
	 <? } ?>
	</body>
</html>
