<?php
class DbConnection{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'mahasiswa';
	protected $connection;
	public function __construct(){
		if(!isset($this->connection)){
			$this->connection = new mysqli($this->host, $this->username, $this->passsword, $this->database);
			if(!$this->connection){
				echo "Cannot connect to database server";
				exit;
			}
		}
		return $this->connection;
	}
}
?>