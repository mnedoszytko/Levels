<?
error_reporting(E_ALL);
ini_set('error_reporting','On');
include('User.class.php');
include('config.php');
$User = new User();
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		
		<script language="JavaScript">
				function ckhForm(){
					var quest = document.getElementById('quest');
					var xp = document.getElementById('xp');
					
					if(notEmpty(quest, "wpisz quest")){
						if(notEmpty(xp, "wpisz xp")){
							return true;
						}
					}
	
	return false;
	
}
					
					function notEmpty(elem, helperMsg){
							if(elem.value.length == 0){
								alert(helperMsg);
										return false;
											}
											return true;
}
			
			function supplyXp() {
				
				
					helper = document.getElementById("quest-helper");
					xp = helper.value;
					if (xp != "") {
						text = helper.options[helper.selectedIndex].text;
						if (confirm("Czy chcesz dodać "+xp+" XP za "+text+'?')) {
							
							xpinput = document.getElementById("xp");
							questinput = document.getElementById("quest");
							xpinput.value = xp;
							questinput.value = text;
							
							alert("ok, dodaję");
							form = document.getElementById('questform');
//							console.log(form);
							form.submit();
											
						}
						
						
					}
				
				
			}
		</script>
	</head>
	<body>
	<?


	 if (!empty($_POST['id'])) { 	
 			if ($new_user_xp = $User->add_xp($_POST['id'], $_POST['xp'], $_POST['quest'], $_POST['date'])) {
 			echo "Dodano xp";
 			
 			}
 			}
 			
 			else {
 	
  ?>
	Wybierz z listy:
	<form action="<?=$PHP_SELF?>" method="POST" id="questform" onsubmit="return chkForm()">
	<select name="quest-helper" id="quest-helper" onChange="supplyXp()">
	<option value="">--Wybierz--</option>
	<?	
		foreach($questdb as $qu=>$exp){
			echo'<option value="'.$exp.'">'.$qu.'</option>';
    }
?>
</select>

	Lub wpisz manualnie:

		Xp: <input type="text" name="xp" id="xp"><br>
		Za co: <input type="text" name="quest" id="quest">
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="hidden" name="date" value="<?=date("Y-m-d")." - ".date("H:i:s")?>">
		<br><input type="submit" name="save" value="Dodaj xp">
		
	
	</form>
	<?  } ?>
	<br>
	<a href="index.php">Powrót do listy levelowców</a>
	</body>
</html>