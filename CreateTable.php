<?php
/*{"FILENAME":"CreateTable",
	"TYPE":"ConcreateClass",
	"DESCRIPTION":"Create table with database data",
	"INCLUDE":"UConnect.php"}
*/
include_once("UConnect.php");
class CreateTable{
 private $tableMaster;
 private $hookup;

 public function __construct()
 {
 $this->tableMaster="helpdesk";#change table
 $this->hookup=UConnect::doConnect;
 $drop= "DROP TABLE IF EXIST $this->tableMaster";
//error_if fails
	if($this->hookup->query($drop)==true){
		printf("Old table %s has been dropped.<br/>",$this->tableMaster);
	}	
	//query
	$sql="CREATE TABLE $this->tableMaster 
	(id INT NOT NUll AUTO_INCREMENT, chain VARCHAR(3),responce TEXT, PRIMARY KEY(id))";

	if($this->hookup->query($sql)=== true){
		printf("Table $this->tableMaster has been created successfully.<br/>");
	}
	$this->hookup->close();
 }	

}
$CI=new CreateTable();

 ?>