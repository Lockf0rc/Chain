<?php
/*
FILENAME:UConnect.php
SCOPE:$DATABase
*/
//custome error handler with emails 
set_error_handler('error_mail');
function error_mail($number,$message,$file,$line,$vars){
$email="<p>An Error ($number) occurred on line <strong>$line</strong>
<strong>file: $file.</strong></p><p>message: $message </p>";
$email.="<pre>".print_r($vars,1). "</pre>";
$headers = 'Content-type: text/html; charset=utf-8'."\r\n";
error_log($mail,1,"error@scriptreference.com",$headers);
}
Class UConnect implements IConnect
{
	private static $server= IConnect::HOST;
	private static $currentDB= IConnect::DBNAME;
	private static $user= IConnect::UNAME;
	private static $pass= IConnect::PW;
	private static $hookup;

	/*implements*/
	public function doConnect(){
		self::$hookup=mysqli_connect(self::$server,self::$user,self::$pass,self::$hookup);
		if(self::$hookup){}elseif(mysql_connect_error(self::$hookup)){
			echo('here is why it failed ':.mysqli_connect_error());
			return self::$hookup;
			}
		}
	
}

