<?php

class Main{
 
 private $db;

 public function __construct($database){
  
   $this->db=$database;

}

 
public function check_db_connection($name) {
 
	
	

 
	$query 	= $this->db->prepare("INSERT INTO `test` (`success`) VALUES (?) ");
 
	$query->bindValue(1, $name);
	$success="Successful";


	try{
		$query->execute();
              return $success;
       
	
	}catch(PDOException $e){
		die($e->getMessage());
	}	

 
}
 


}
?>
