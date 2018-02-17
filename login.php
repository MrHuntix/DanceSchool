<?php
	require 'dbase.php';
	$error='';
	session_start();
	if(isset($_REQUEST['username'])&&isset($_REQUEST['password']))
	{
		$username=$_REQUEST['username'];
		//$SESSION
		$password=$_REQUEST['password'];
		if(!empty($username)&&!empty($password))
		{
			$query="SELECT id FROM users WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password)."'";
			if($query_run=mysql_query($query))
			{
				if($row=mysql_num_rows($query_run)==0)
				{
					$error="user does not exist";
				}
				else
				{
					$_SESSION['username']=$username;
					header("Location:afterlog.php");
				}
			}
		}
		else
		{
			$error="username/password incorrect";
		}
	}
?>