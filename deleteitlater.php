<?php
	require 'dbase.php';
	include 'login.php';
	$error='';
		$name='puneeth';
		$subject="Answer to your question";
		$answer='qfqwfqfqefqf nuq ufnu qwnofnqowufnoqwn oufnoq wnfonwqo ';
		$answer1=str_replace(" ","%20",$answer);
			$q="SELECT * FROM questions WHERE name='$name'";
			$qr=mysql_query($q);
				$row=mysql_fetch_assoc($qr);
				echo "name:".$row['name'];
				echo "<br>";
				echo "question:".$row['question'];
				echo "<br>";
				echo "email:";
				echo '<a href="mailto:';
				echo $row['email'].'?'.'subject='.str_replace(" ","%20",$row['question']).'&body='.$answer1;
				echo '">';
				echo $row['email'];
				echo '</a>';
?>
