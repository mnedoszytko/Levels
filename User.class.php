<?
/*
served at githhub.com  (nedo)
*/
class User {
	private $table_name='xp_users';
	public $levels; 
	public $db_config;
	public function __construct(){

		include('config.php');
		
		$this->db_config = $db_config;
		
		$sn = $_SERVER['SERVER_NAME'];

		if ($sn = 'localhost'){
			
		
		$myconn = @mysql_connect($this->db_config['devel']['host'],$this->db_config['devel']['username'],$this->db_config['devel']['password']);
		$seldb = @mysql_select_db($this->db_config['devel']['database'],$myconn);
		} else {
		$myconn = @mysql_connect($this->db_config['prod']['host'],$this->db_config['prod']['username'],$this->db_config['prod']['password']);
		$seldb = @mysql_select_db($this->db_config['prod']['database'],$myconn);

		}
		
	
		
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
				$noco = $no -1; 
				return $noco;	
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