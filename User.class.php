<?
/*
served at githhub.com  (nedo)
*/
class User {
	private $db_host='localhost';
	private $db_username='level';
	private $db_password='level';
	private $db_name='levelowanie';
	
	public $levels; 
	
	public function __construct(){
	
		$myconn = @mysql_connect($this->db_host,$this->db_username,$this->db_password);
		$seldb = @mysql_select_db($this->db_name,$myconn);
		
		
		include('config.php');
		
		$this->levels = $levels;
		
	}
	public function add_user($username){
		
		if (!empty($username)) {
			
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
		
		return mysql_query($query);
		
	}
	public function add_xp($id, $xp){
			
		$query = "SELECT xp FROM users WHERE users.id=$id";		
		$result = mysql_query($query);
		$data = mysql_fetch_row($result);
		$current_xp = $data[0];	

		$new_xp = $current_xp + $xp;
	
		$query = "UPDATE users SET xp='$new_xp' WHERE users.id=$id";
		
		if (mysql_query($query)) {
			$old_lvl = $this->whichLvl($current_xp);
			$new_lvl = $this->whichLvl($new_xp);
			if ($old_lvl != $new_lvl){ 
				$new_lvl_name = $this->levels[$new_lvl]['name'];
				$query = "UPDATE users SET lvl='$new_lvl', lvl_name='$new_lvl_name' WHERE users.id=$id";
			}
			return mysql_query($query);

		}
							
	}
		
	
	public function whichLvl($xp){		
	
echo "Sprawdzam jaki level powinien byc przy xp $xp...\n";
		foreach ($this->levels as $no=>$lvl){
			if ($xp <= $lvl['threshold']){  
			
				return $no;
				
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