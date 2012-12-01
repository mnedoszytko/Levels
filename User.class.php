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
		
		//nedo: dlaczego dodajesz liczbę $_POST['xp'] do $result, ktore jest wynikiem mysql_result
		//jesli chcesz uzyskac wartosc kolumny xp dla rzedu wyciagnietego $query, musisz uzyc innej logiki - sprawdz funkcje mysql_fetch_row, albo podobną...
		//w PHP wszystkie zmienne mają swoje typy: int, float, bool, string itd.., bardziej zaawansowane to np result, ktory wlasnie jest wynikiem funkcji mysql_query. sprobuj zrobic var_dump($result) i var_dump($POST) i zobaczysz ze nie da sie dodac całki z buraka do łokcia
		
		
		
		$query = "UPDATE users SET xp='$new_xp' WHERE user.id=$id";
		
		
		//nedo: ok, ale trzeba wywołać $query mysql_query($query)
		
		// tutaj na razie chciałem by funkcja dodawała poprawnie xp, bez ingerencji w level
		
			
	}
		
	
	public function whichLevel($xp){
	
		//nedo: zeby to zrozumiec, musisz zobaczyc jak wyglada struktura $levels. poki co w tej funkcji $levels jest puste, bo niby skad ma sie wziac
		//musisz je w jakis sposob zainicjowac z configa
		
		
		foreach($levels as $no=>$lvl){
			if ($xp >= $lvl['treshold']){
				return $no;
			} // tego do końca nie rozumiem, zasugerowałem się wczorajszymi podpowiedziami
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
		$query = "UPDATE users SET lvl='lvl+1', lvl_name='$nextlevel' WHERE user.id=$id";
		//chcialem zrobic tak, by funkcja zczytywala aktualne id w arrayu z config.php
		//dodawała 1 i otrzymywała nowy kolejna pozycje w arrayu
		//potem updateowala lvl name i dodawała 1 do levelu
		
		/* nedo: 
		
			hmm, ale to przeciez jest tak, ze ma dodac level dla aktualnego usera, wiec jako parametr funkcji musisz dac user_id.
			po drugie, powinienes wyciagnac aktualny level z bazy, nastepnie dodac do tej wartosci jeden, nastepnie wykonac update query...
			
			
			
		*/
		
		//1. wyciagnij aktualny level dla user id $id
		//2. dodaj do niego 1
		//3. wykonaj update dla user id $id z nowym levelem
		
		
		
		
		
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