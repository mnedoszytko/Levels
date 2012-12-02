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
	
		if (!empty($data) && !empty($data['name'])) {
			
				$query = "INSERT INTO users (name,xp,lvl,lvl_name) VALUES('$username',0,0,'noone')";
				if (mysql_query($query)) {
					return mysql_insert_id();
					
				} else {
					
					return false;
				}
				
				
			
			return true;
		
		} else {
			
			return false;
		}
		
	}
	public function delete_user($id = null){
		
		$query = "DELETE FROM users WHERE users.id=$id";
		
		//zwroc to co zwraca mysql_query czyli czy sie udalo czy nie
		return mysql_query($query);
		
	}
	public function add_xp($id = null, $xp = null){
		
		$query = "SELECT xp FROM users WHERE users.id=$id";
		
		
		$result = mysql_query($query);
		$data = mysql_fetch_row($result);
		$current_xp = $data[1];
		
		$new_xp = $current_xp + $_POST['xp'];
	
		$query = "UPDATE users SET xp='$new_xp' WHERE users.id=$id";
		if (mysql_query($query)) {
			
			//zaktualizowano wartosc xp, teraz sprawdz czy nie doszlo do zmiany levelu
			
			$old_lvl = $this->whichLvl($current_xp);
			$new_lvl = $this->whichLvl($new_xp);
			if ($old_lvl != $new_lvl) $this->lvlUP($id);
			
			
		}
		
		
		
		

		
			
	}
		
	
	public function whichLevel($xp){
	
		//nedo: zeby to zrozumiec, musisz zobaczyc jak wyglada struktura $levels. poki co w tej funkcji $levels jest puste, bo niby skad ma sie wziac
		//musisz je w jakis sposob zainicjowac z configa
		
		//$this->levels jest zaczytane w konstrukturze
		
		
		foreach($this->levels as $no=>$lvl){
			if ($xp >= $lvl['threshold']){
				//wal sobie takie
				//echo "Sprawdzam poziom $lvl, prog to $lvl[treshold]";
				return $no;
			} 
		}
		
	}
	public function edit($id = null, $name = null){
	
	if (!empty($id) && !empty($name)){
		
		$query = "UPDATE users SET name='$name' WHERE users.id=$id";
		return mysql_query($query);
		
	} else {
		return false;
	}
	}
	public function levelUP($user_id = null){
	
		if (!empty($user_id)) {
			
			//pobierz aktualny level
			
			$query = "SELECT lvl FROM users where users.id=$user_id";
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