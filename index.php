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
	</head>
	<body>
<?	
$query = "SELECT * FROM users ORDER BY id";
$result = mysql_query($query);
if (mysql_num_rows($result) > 0) {	?>
<table border=1>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>XP</th>
	<th>Level</th>
	<th>Level name</th>
	<th></th>
	</tr>
<?
while($array = mysql_fetch_assoc($result)) { ?>
<tr>
	<td><?=$array['id']?></td>
	<td><?=$array['name']?>
	<td><?=$array['xp']?>
	<td><?=$array['lvl']?>
	<td><?=$array['lvl_name']?>
	<td>
	<a href="delete_dude.php?id=<?=$array['id']?>">usuń</a>
	<a href="records.php?id=<?=$array['id']?>">dodaj xp</a>
	</td>
</tr>
<?
}
?>
</table>	
<?	
} else { ?>
Nie ma żadnych levelowców w bazie
<? } ?>
<a href="add_dude.php">Dodaj nowego levelowca</a>
	</body>
</html>
