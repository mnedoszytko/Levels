<?
error_reporting(E_ALL);
ini_set('error_reporting','On');
include('User.class.php');
$User = new User();
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
<?	
$users = $User->getUsers();
if (count($users) > 0) {	?>
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
foreach($users as $user) { ?>
<tr>
	<td><?=$user['id']?></td>
	<td><?=$user['name']?>
	<td><?=$user['xp']?>
	<td><?=$user['lvl']?>
	<td><?=$user['lvl_name']?>
	<td>
	<a href="delete_dude.php?id=<?=$user['id']?>">usuń</a>
	<a href="add_xp.php?id=<?=$user['id']?>">dodaj xp</a>
	<a href="edit_dude.php?id=<?=$user['id']?>">zmień nick</a>
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
