<?php
	require 'dbase.php';
	include 'login.php';
	if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
	{
		header("Location:alreadyloggedin.php");
	}
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
			echo "<script type='text/javascript'>alert('not empty');</script>";
			$query="INSERT INTO questions VALUES('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($question)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($style)."')";
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
<html>
	<head>
		<title>ASK A QUESTION</title>
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
	
			<?php
				if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
				{
			?>
					<li><a href="answer.php">ANSWER</a></li>
			<?php
				}?>
		
			<body style="margin:0px;height:1000px;">
<div id="grad2">
<div class="clearHeader"        style="background: rgba(0,0,0, 1 );">
<!--<h3 style="float:left;"><a href="https://www.google.co.in/"><img src="C:\Users\shafiq\Desktop\web_dev_and_java_app_dev\posh-font.png" style="height:40px;width:150px;opacity:1px;"></a></h3>-->
    <header>
    <img src="http://allstreetdance.co.uk/wp-content/uploads/2010/06/logo-got-to-dance-black.jpg" height="120px" width="350px" style="position:relative;top:0px;">
       <ul class="p" style="padding:10px;position:absolute;top:80px;padding-left:435px;">

         <li class="q" style="float:left;font-size:15px;padding:5px;padding-right:5px;font-family:Orbitron"><a href="dance1.php">HOME</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="ask.php">ASK US</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="beats.php">BEATS</a></li>
 <li class="q" id="new" style="float:left;font-size:15px;padding:5px;font-family:Orbitron;">
        <a href="#" class="dropbtn" id="sh">LEARN UP</a>
        <div class="dropdown-content" id="sh" style="margin-top: 93px;" >
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
		<center><div id="signup">
			<form action="dance1.php" methord="POST">
				Username:  <input type="text" name="username"><br><br>
				Password:  <input type="password" name="password"><br><br>
				<span style="padding-right:130px;"><input type="submit" name="submit" value="Log In"><br><br></span>
				OR <br><br>
				<a href="register.php" class="lalala">Register</a>
			</form>
		</div></center>
	
			
			<div id="border" style="position:fixed;top:0px;font-weight:bold;left:-2px;"><p style="color:black;">Follow us on:</p><a href="https://www.facebook.com/"><img src="fb.jpg" height="30px" width="30px"></a>
			<a href="https://www.instagram.com/"><img src="insta.png" height="30px" width="30px"></a>
			<a href="https://www.twitter.com/"><img src="twitter.jpg" height="30px" width="30px"></a></div>
		</div>
		
	</body>
</html>