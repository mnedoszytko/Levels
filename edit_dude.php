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
	/*
	
	1. drobna uwaga odnosnie zmiennych $_POST oraz $_GET
	
	-staraj sie nie mieszac ich, tzn albo formuarz wysyla metodą POST albo GET
	
	-w tym wypadku w parametrach edit_user masz $_GET i $_POST. Zwroc uwage, ze formularz ma ustawioną method=POST
	 duzym fartem udalo Ci się przekazac zmienną $_GET, poniewaz nie ustaliles form action, i wzial on swoj URL czyli edit_user?id=xx, co przypadkiem ustawilo $_GET['id']    . 
	 
	 
	 -golden rule: jak masz formularz edycji czegos zawsze miej <input type="hidden" name="id" value="<?$przekazane_jakos_id?>">
	 -pro tip. poczytaj o zmiennej $_REQUEST
	 
	 2. znow klasik error w parametrach przekazujesz ($id = $_GET['id'] oraz $name = $_POST['name'])
	 	niepotrzebnie, poprawne wywolanie to edit_user($_GET{'id'], $_POST['name']). To co ustawi sie wewnatrz funkcji jest okreslone jej definicja
	 	
	 	function edit_user($id,$name) ... to, co przekazesz pierwszym parametrem stanie sie zmienna $id wewnatrz funkcji a drugim zmienna $name w jej wnetrzu
	 	
	 	natomiast to, co robisz tutaj, czyli $id = $_GET['id'] to ustalasz zmienna $id (w tym scopie, czyli widoczna jest ona wewnatrz tego skryptu), a do funkcji przekazujesz to, co jest wynikiem tej operacji, czyli jej wartosc. oczywiscie do funkcji trafia to co trzeba, ale uczysz sie zlych nawykow, deklarujac niepotrzebne zmienne 
	 	

	 
	
	
	*/
	
	
	if (isset($_POST['submit']))  {	
			if ($new_user_name = $User->edit_user($id = $_GET['id'], $name = $_POST['name'])) {
			echo "Zmieniono name";
	} else {
		echo "Nie udało się zmienić name";
	}
?>
<br>
<a href="index.php">Powrót do listy levelowców</a>			
	<? }else { ?>
	Na co chcesz zmienić obecny nick?
	<form action="" method="POST">
		Name: <input type="text" name="name"><br>
		<input type="submit" name="submit" value="Zmień">
	</form>
	<?  } ?>
	</body>
</html>
