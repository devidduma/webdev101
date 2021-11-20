<?php

class DatabaseConnect {
	public function __construct($host,$username,$password,$database) {
		if($this->Connect($host,$username,$password,$database)) echo 'Connected!';
		else echo 'Connection failed!';
	}
	public function Connect($host,$username,$password,$database) {
		return @mysqli_connect($host,$username,$password,$database);
	}
}

$conn= new DatabaseConnect('localhost','root','','my_own_database');

?>