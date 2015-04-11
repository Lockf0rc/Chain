<?php
/*
{"FILENAME":"InsertData.php",
"DESCRIPTION":"takes the data from index.php and inserts it to Helpdesk table
in the database.
"}*/

include_once('UConnect.php');
class InsertData
{
	private $tableMaster;
	private $hookup;
	public function __construct()
	{

		//Name table and connect
		$this->tableMaster="helpdesk":
		$this->hookup=UConnect::doConnect();
		// From HTML form
		$chain= $this->hookup->real_escape_string($_POST['chain']);
		$response=$this->hookup->real_escape_string($_POST['responce']);

		if($this->hookup->query($sql)){
			printf("Chain Query: %s <br/>Response %s <br/> have been inserted into %s"
				,$chain, $responce,$this->tableMaster);
					}
				//%s is a string from parameter
				elseif(($result=$this->hookup->query($sql)===false)){
					printf("Invalid query:%s <br/> Whole query: %s <br/>",$this->hookup->error,$sql);
					exit()
				}
				$this->hookup->close();	
			}
}

$CI=new InsertData();
?>