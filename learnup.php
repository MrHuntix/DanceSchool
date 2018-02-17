<?php
	require 'dbase.php';
	include 'login.php';
	$uname="";
	if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
	{
		$uname=$_SESSION['username'];
	}
	$message="Fill all the provided fields";
	if(isset($_REQUEST['name'])&&isset($_REQUEST['question'])&&isset($_REQUEST['email']))
	{
		$name=$_REQUEST['name'];
		$question=$_REQUEST['question'];
		$email=$_REQUEST['email'];
		$style=$_REQUEST['style'];
		if(!empty($name)&&!empty($question)&&!empty($email))
		{
			echo "<script type='text/javascript'>alert('question has been submitted');</script>";
			$query="INSERT INTO questions () VALUES('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($question)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($style)."','".mysql_real_escape_string("not answered")."','".mysql_real_escape_string("no")."')";
			if($query_run=mysql_query($query))
			{
				header("Location:correct.php");
				//echo "<script type='text/javascript'>alert('question submitted');</script>";
			}

		}
		else
		{
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Short+Stack" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript">
			function hide()
			{
				if(document.body.scrollTop==0)
					{document.getElementById('nav').style.opacity=1;}
				if(document.body.scrollTop>0)
					{document.getElementById('nav').style.opacity=.5;}
			}
			function show()
			{
				document.getElementById('nav').style.opacity=1;
			}
		</script>
	</head>
	<link rel="stylesheet" type="text/css" href="try.css">
<body style="margin:0px;height:1500px;">
<div id="grad2" style="position:inherit;">
<div class="clearHeader" style="background: rgba(0,0,0, 1 );">
<!--<h3 style="float:left;"><a href="https://www.google.co.in/"><img src="C:\Users\shafiq\Desktop\web_dev_and_java_app_dev\posh-font.png" style="height:40px;width:150px;opacity:1px;"></a></h3>-->
    <header>
    <img src="http://allstreetdance.co.uk/wp-content/uploads/2010/06/logo-got-to-dance-black.jpg" height="120px" width="350px" style="position:relative;top:0px;">
       <ul class="p" style="padding:10px;position:absolute;top:80px;padding-left:425px;">

         <li class="q" style="float:left;font-size:15px;padding:5px;padding-right:5px;font-family:Orbitron"><a href="dance1.php">HOME</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="ask.php">ASK US</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="beats.php">BEATS</a></li>
  <li class="q" id="new" style="float:left;font-size:15px;padding:5px;font-family:Orbitron;">
        <a href="#" class="dropbtn" id="sh">LEARN UP</a>
        <div class="dropdown-content" id="sh" >
          <center><table>
          <tr>
            <td><a href="learnup.php">HIP-HOP</a></td>
            <td><a href="tradjazz.php">TRADITIONAL JAZZ</a></td>
            <td><a href="professional.php">PROFESSIONAL PERFORMANCE</a></td>
            <td><a href="latin.php">LATIN</a></td>
            <td><a href="ballroom.php">BALLROOM</a></td>
            <tr>
          </table></center>
        </div>
      </li>    				
  <?php
				if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
				{
			?>
					<li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="answer.php">ANSWER</a></li>
			<?php
				}?>
         <?php
				if(!isset($_SESSION['username'])&&empty($_SESSION['username']))
				{
			?>
					<li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="signup.php">SIGNUP</a></li>
			<?php
				}?>
         <?php
					if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
			 	{
			 	
			 		echo '<li style="float:right;font-size:15px;padding:5px;font-family:Orbitron" class="q"><a href="logout.php">LOG OUT</a></li>';
			 	
			 	}
			 			
				?>
 
</ul>
	</header>
	<ul style="list-style-type: none;">
			<li class ="q" style="float:right;left:1180px;padding:5px;font-size:25px;top:10px;position:absolute;font-family:Orbitron" id="sh" ><a><?php
			 if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
			 {
			 	echo "Welcome ".$uname;
			 } 
			 else
			 {
			 	echo "HELLO";
			 }
			 ?></a></li>
		</ul>
		</div>
		<pre>














<center><div id="dance"><p style="font-size:20px;">Popping : Classes by Popping John</p>
<table style="padding:  5px 5px 5px 5px;">
				<tr>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/vt1w3iCX1q8" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/gSV3TuOS4qs" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/0Lub_6v5N-I" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/7ADctXH62S0" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/lb08ewwocvk" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/wD4dJJnYA6Q" frameborder="0" allowfullscreen></iframe></td>
				<td><a href="https://www.youtube.com/channel/UCKrOk6z473TunIzyYw0CUQw" style="text-decoration:none;font-size:15px;color:yellow;" target="_blank">Click here if you want full classes</a></td>
		</tr></table></div></center>



<center><div id="dance"><p style="font-size:20px;">Bboying : Classes by Vincanity.</p>
<table style="padding:  5px 5px 5px 5px;">
				<tr>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/4VYNLa20Vqg" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/SuZhAFbiB78" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/-kT0HJhm5ck" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/SYUbP0hDB3k" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/YaeLg-OUSYU" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/C5UIozbSeyM" frameborder="0" allowfullscreen></iframe></td>
				<td><a href="https://www.youtube.com/user/VincaniTV" style="text-decoration:none;font-size:15px;color:yellow;" target="_blank">Click here if you want full classes</a></td>
		</tr></table></div></center>



		<center><div id="dance"><p style="font-size:20px;">Hip hop: Classes by Matt Steffanina.</p>
<table style="padding:  5px 5px 5px 5px;">
				<tr>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/UUOnFDQcwas" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/UEw20QPFov0" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/NEtt7VQwoBc" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/ZxT7kK5Gygk" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/KsQXdmg6VXY" frameborder="0" allowfullscreen></iframe></td>
				<td><iframe width="250" height="250" src="https://www.youtube.com/embed/ryMXngUqXqs" frameborder="0" allowfullscreen></iframe></td>
				<td><a href="https://www.youtube.com/channel/UCczFdwWpVEpoqb-eMm4c4dQ" style="text-decoration:none;font-size:15px;color:yellow;" target="_blank">Click here if you want full classes</a></td>
		</tr></table></div></center></pre>
	
		
		
		
	</body>
</html>