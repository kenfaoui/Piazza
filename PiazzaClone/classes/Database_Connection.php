<?php 

class Database_Connection 
{
protected static function connect(){
$server_name="localhost";
$db_name="platform";
$username="root";
$password="";
$conn=new PDO("mysql:host=$server_name;dbname=$db_name",$username,$password);
return $conn;
  }

}


 ?>