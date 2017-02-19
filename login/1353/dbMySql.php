<?php
define("DB_SERVER", "mysql17.unoeuro.com");
define("DB_USER", "bareaender_dk0");
define("DB_PASS", "1Nygummiand");
define("DB_NAME", "bareaender_dk0_db");

class DB_con
{
	private $conn;
		 function __construct()
		 {
		  $this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_error());
		 }
		 
		 public function select()
		 {
		  $res=mysqli_query($this->conn, "SELECT * FROM news");
		  return $res;
		 }
		 
		 public function update($id,$title,$description,$date)
		 {
		  $res = mysqli_query($this->conn, "UPDATE news SET title='$title', description='$description', date='$date' WHERE id=".$id);
		  return $res;
	 	 }
}

?>