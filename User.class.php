<?
/*
served at githhub.com  (nedo)
*/
class User {
	private $db_host='localhost';
	private $db_username='level';
	private $db_password='level';
	private $db_name='levelowanie';
	public function __construct(){
	
		//lacze sie z baza danych
		$myconn = @mysql_connect($this->db_host,$this->db_username,$this->db_password);
		$seldb = @mysql_select_db($this->db_name,$myconn);
		
		
	}
	public function add_user($username){
	
		if (!empty($data) && !empty($data['name'])) {
			
				$query = "INSERT INTO users (name,xp,lvl,lvl_name) VALUES('$username',0,'noob')";
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
		
		$query = "DELETE FROM users WHERE user.id=$id";
		
		//zwroc to co zwraca mysql_query czyli czy sie udalo czy nie
		return mysql_query($query);
		
	}
	public function add_xp($id = null, $xp = null){
		
		$query = "SELECT xp FROM users WHERE user.id=$id";
		$result = mysql_query($query);
		$new_xp = $result + $_POST['xp'];
		$query = "UPDATE users SET xp='$new_xp' WHERE user.id=$id";
		
			
	}
		
	
	public function whichLevel($xp){
		foreach($levels as $no=>$lvl){
			if ($xp >= $lvl['treshold']){
				return $no;
			}
		}
		
	}
	public function edit($id = null, $name = null){
	
	if (!empty($id) && !empty($name)){
		
		$query = "UPDATE users SET name='$name' WHERE user.id=$id";
		return mysql_query($query);
		
	} else {
		return false;
	}
	}
	public function levelUP(){
		$curentlevel = array_search($current_id, $levels);
		$nextlevel = $currentLevel + 1;
		$query = "UPDATE users SET lvl_name='$nextlevel' WHERE user.id=$id";
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