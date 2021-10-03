<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'12345678');
define('DB_NAME', 'testedit_db');

class DB_con
{
	public $conn;
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_error());
		$this->conn->set_charset("utf8");
	}
	
	public function select()
	{
		$res=mysqli_query($this->conn,"SELECT * FROM users");
		return $res;
	}
	
	public function delete($table,$id)
	{
		$res = mysqli_query($this->conn,"DELETE FROM $table WHERE user_id=".$id);
		return $res;
	}
	
	public function update($table,$id,$fname,$lname,$city)
	{
		$res = mysqli_query($this->conn,"UPDATE $table SET first_name='$fname', last_name='$lname', user_city='$city' WHERE user_id=".$id);
		return $res;
	}

	public function add($table,$fname,$lname,$city)
	{
		$res = mysqli_query($this->conn,"INSERT INTO $table (`user_id`, `first_name`, `last_name`, `user_city`) VALUES (NULL,'".$fname."','".$lname."','".$city."')");
		return $res;
	}
}

?>