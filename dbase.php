<?php
$host="localhost";
$user="root";
$password="";
$d_name="adatabase";
if(@!mysql_connect($host,$user,$password) or @!mysql_select_db($d_name))
{
	die("error connceting");
}
else
{

}

?>