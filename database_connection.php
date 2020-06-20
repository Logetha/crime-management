<?php 
class Database
{
	var $host="localhost";
	var $user="root";
	var $pass="";
	var $db="online_crime_reporting";
	public function connect()
	{
		//create database connection
	$con=mysqli_connect($this->host,$this->user,$this->pass,$this->db); 
	return $con;
	}
}
?>