<?
/*
served at githhub.com  (nedo)
*/
class User {
	private $db_host='localhost';
	private $db_username='level';
	private $db_password='level';
	private $db_name='levelowanie';
	
	public $levels; //tutaj bedzie tabelka z roznymi poziomamy
	
	public function __construct(){
	
		//lacze sie z baza danych
		$myconn = @mysql_connect($this->db_host,$this->db_username,$this->db_password);
		$seldb = @mysql_select_db($this->db_name,$myconn);
		
		
		include('config.php');
		
		$this->levels = $levels; //przekaz do wlasciwosci $this->levels, aby byla widoczna w kazdym elemencie tego obiektu
		
		
		
	}
	public function add_user($username){
		//przekazales zmienna $username....
		
		

		if (!empty($username)) {
		
		echo "Podano niezbędne parametry, dodaję zioma";
			
				$query = "INSERT INTO users (name,xp,lvl,lvl_name) VALUES('$username',0,0,'noone')";
				if (mysql_query($query)) {
					return mysql_insert_id(); 
				} else {
					
					return false;
				}
				
				
			
			return true;
		
		} else {
			die("Nie podano parametrów do funkcji add_xp, takich jak potrzebuję");
			return false;
		}
		
	}
	public function delete_user($id = null){
		
		$query = "DELETE FROM users WHERE users.id=$id";
		
		//zwroc to co zwraca mysql_query czyli czy sie udalo czy nie
		return mysql_query($query);
		
	}
	public function add_xp($id, $xp){
			
		$query = "SELECT xp FROM users WHERE users.id=$id";		
		$result = mysql_query($query);
		$data = mysql_fetch_row($result);
		
		$current_xp = $data[0];	
		
		//a co tu robi $_POST? klasa User ma swoje zmienne, przekazane przez parametry funkcji ($id, $xp)
		$new_xp = $current_xp + $_POST['xp'];
	
		$query = "UPDATE users SET xp='$new_xp' WHERE users.id=$id";
		
		if (mysql_query($query)) {
			var_dump($current_xp);
			
			$old_lvl = $this->whichLvl($current_xp);
			var_dump($old_lvl);
				
			
			// tutaj jest problem, funkcja nie zczytuje levelu
			
			
			
			$new_lvl = $this->whichLvl($new_xp);
			var_dump($new_lvl);
			if ($old_lvl != $new_lvl) $this->lvlUP($id);
			return mysql_query($query);

		}
		
		
		
					
	}
		
	
	public function whichLvl($xp){		
	
echo "Sprawdzam jaki level powinien byc przy xp $xp...\n";
		foreach($this->levels as $no=>$lvl){
		echo "Może level $no? ";
			if ($xp >= $lvl['threshold']){  // jak spojrzysz na wynik dzialania, powinno Ci podwiedziec
			
			/*
			
			wyglada na to, ze znak przymiarki jest postawiony nie w ta strone...
			
			
			*/
				echo "Tak!";
				return $no;
				//tu gdzieś jest błąd, tyle że nie wiem gdzie dokładnie.
				
				//no to trzeba debugować, dokłądniej tak jak wyzej
			}  else {
				
				echo "nie";
			}
		}
		die();
		
	}
	public function edit_user($id = null, $name = null){
	
	if (!empty($id) && !empty($name)){
		
		$query = "UPDATE users SET name='$name' WHERE users.id=$id";
		return mysql_query($query);
		
	} else {
		return false;
	}
	}
	public function levelUP($id = null){
	
		if (!empty($id)) {
			
			//pobierz aktualny level
			
			$query = "SELECT lvl FROM users WHERE users.id=$id";
			$data = mysql_fetch_row($query);
			$current_lvl = $data[1];
			
			$next_lvl = $current_lvl+1;
			$next_lvl_name = $this->levels[$next_lvl]['name'];
			
			$query = "UPDATE users SET lvl=$next_lvl, lvl_name=$next_lvl_name WHERE id=$user_id";
			return mysql_query($query);
			
			
			
			
			
			
		} else {
			die("Nie podano user_id do levelUp");
			return false;
		}
		
		
			}
	
	
	public function getUsers($order = null, $limit = null) {
		
		
		$q = "SELECT * FROM users";
		if (!empty($order)) $q .= "ORDER BY $order";
		if (!empty($limit)) $q .= "LIMIT $limit";
		
		$out = array();
		
		$result = mysql_query($q);
		if (!empty($result)) { 
			while ($a = mysql_fetch_assoc($result)) {
				
				$out[] = $a;
			}
			return $out;
 				
			
		} else {
			
			return false;
		}
		
		
		
		
	}
}
?>