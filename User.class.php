<?
/*
served at githhub.com  (nedo)
*/
class User {
	private $db_host='localhost';
	private $db_username='level';
	private $db_password='level';
	private $db_name='levelowanie';
	private $table_name='xp_users';
	public $levels; 
	
	public function __construct(){
	
		$myconn = @mysql_connect($this->db_host,$this->db_username,$this->db_password);
		$seldb = @mysql_select_db($this->db_name,$myconn);
		
		
		include('config.php');
		
		$this->levels = $levels; 
		
		
	}
	public function add_user($username){
		
		

		if (!empty($username)) {
		
		echo "Podano niezbędne parametry, dodaję zioma";
			
				$query = "INSERT INTO $this->table_name (name,xp,lvl,lvl_name) VALUES('$username',0,0,'noone')";
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
		
		$query = "DELETE FROM $this->table_name WHERE $this->table_name.id=$id";
		return mysql_query($query);
		
	}
	public function add_xp($id, $xp){
			
		$query = "SELECT xp FROM $this->table_name WHERE $this->table_name.id=$id";		
		$result = mysql_query($query);
		$data = mysql_fetch_row($result);
		$current_xp = $data[0];	

		$new_xp = $current_xp + $xp;
	
		$query = "UPDATE $this->table_name SET xp='$new_xp' WHERE $this->table_name.id=$id";
		
		if (mysql_query($query)) {
			$old_lvl = $this->whichLvl($current_xp);
			$new_lvl = $this->whichLvl($new_xp);
			if ($old_lvl != $new_lvl){ 
				$new_lvl_name = $this->levels[$new_lvl]['name'];
				$query = "UPDATE $this->table_name SET lvl='$new_lvl', lvl_name='$new_lvl_name' WHERE $this->table_name.id=$id";
				echo "LevelUP! nowy level name to $new_lvl_name ";
			}
			return mysql_query($query);

		}
		
		
		
					
	}
		
	
	public function whichLvl($xp){		
	
		foreach ($this->levels as $no=>$lvl){
			if ($xp <= $lvl['threshold']){  
				return $no;	
			} 
		}
		die();
		
	}
	public function edit_user($id = null, $name = null){
	
	if (!empty($id) && !empty($name)){
		
		$query = "UPDATE $this->table_name SET name='$name' WHERE $this->table_name.id=$id";
		return mysql_query($query);
		
	} else {
		return false;
	}
	}
		
	public function getUsers($order = null, $limit = null) {
		
		
		$q = "SELECT * FROM $this->table_name";
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