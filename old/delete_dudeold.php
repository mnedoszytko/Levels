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
	<?
$q = "DELETE FROM users WHERE id=".$_GET['id'];

if(mysql_query($q)) {
	?>
	Usunięto levelowca <a href="index.php">Powrót</a>
	<?
} else {
	?>
	Coś się zjebało	
	<? echo mysql_error(); ?>
<a href="index.php">Powrót</a>
	
<?
}
	?>
	</body>
</html>
