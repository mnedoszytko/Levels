<?


ini_set('error_reporting','On');

error_reporting(E_ALL);

include('User.class.php');

$User = new User();
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
<?	
$users = $User->getRecords($_GET['id']);
if (count($users) > 0) {	?>
<table border=1>
<tr>
	<th>Id</th>
	<th>User_Id</th>
	<th>Timestamp</th>
	<th>Quest</th>
	<th>Level_up</th>
	<th>Level_up_name</th>
	<th></th>
	</tr>
<?
foreach($users as $user) { ?>
<tr>
	<td><?=$user['id']?></td>
	<td><?=$user['user_id']?>
	<td><?=$user['timestamp']?>
	<td><?=$user['quest']?>
	<td><?=$user['level_up']?>
	<td><?=$user['level_up_name']?>
	<td>
	<a href="delete_record.php?id=<?=$user['id']?>">usuń</a>
	</td>
</tr>
<?
}
?>
</table>	
<?	
} else { ?>
Nie ma żadnych wyników w bazie
<? } ?>
<a href="add_xp.php?id=<?=$_GET['id']?>">Dodaj xp</a>
	</body>
</html>
