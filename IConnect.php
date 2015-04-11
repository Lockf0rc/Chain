<?php
/*
{ "FILENAME":"IConnect.php",
"DESCRIPTION":"Database connection "
"INTERFACE":"Connection functions"
}
*/ 
interface IConnect
{
const HOST="localhost";
const UNAME="lockf0rc";
const PW="password";
const DBNAME="DATA";
public function doConnect();
}
?>
