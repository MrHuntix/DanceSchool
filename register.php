<?php
	require 'dbase.php';
	$GLOBALS['error'] ='';
	if(isset($_REQUEST['firstname'])&&isset($_REQUEST['lastname'])&&isset($_REQUEST['username'])&&isset($_REQUEST['password']))
	{
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$firstname=$_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
		$style=$_REQUEST['style'];
		if(!empty($username)&&!empty($password)&&!empty($firstname)&&!empty($lastname))
		{
			$queryc="SELECT username FROM users WHERE username='$username'";
			$run=mysql_query($queryc);
			if(mysql_num_rows($run)==1)
			{
				$GLOBALS['error']="username already exists";
			}
			else
			{
				$query="INSERT INTO users VALUES('','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($style)."')";
				if($queryrun=mysql_query($query))
				{
					header("Location:success.php");
				}
				else
				{
					$GLOBALS['error']= "problem registering user";
				}
			}		
		}
		else
		{
			$GLOBALS['error']="fillup all the fields";
		}
	}
?>
<!DOCTYPEhtml>
<html>
	<head>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Short+Stack" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="jquery.js"></script>
		<script type="text/javascript" src="users.js"></script>
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
  <li class="q" id="new" style="float:left;font-size:15px;padding:5px;font-family:Orbitron">
        <a href="#" class="dropbtn" id="sh">LEARN UP</a>
        <div class="dropdown-content" id="sh">
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
         
         <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="signup.php">SIGN UP</a></li>
         
 
</ul>
	</header>
	<ul style="list-style-type: none;">
			<li class="q" style="float:right;padding-right:120px;padding:5px;font-size:25px;position:absolute;top:10px;font-family:Orbitron" id="sh"><a>
				<?php
					if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
			 	{
			 	
			 		echo '<li style="float:right;background-color:#4CAF50;height:45px;" id="sh"><a href="logout.php">LOG OUT</a></li>';
			 	
			 	}
			 			
				?>
			</a></li>
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
<center><div id="sectionreg">
			<form methord="POST" action="register.php" >
				Name:<br><input type="text" name="firstname"><br>
				Last Name:<br><input type="text" name="lastname"><br>
				Username:<br><input type="text" name="username" id="username" autocomplete="off"><br>
				Password:<br><input type="password" name="password"><br>
				Select your style:<br>
				<select name="style">
				<option value="All">All</option>
			    <option value="Western">Western</option>
			    <option value="Classical">Classical</option>
			    <option value="Freestyle">Freestyle</option>
			    <option value="Street Dance">Street Dance</option>
			    <option value="Disco">Disco</option>
			    <option value="Experimental">Experimental</option>
			  	</select><br><br>
				<input type="submit" value="Submit">
			</form>
			<p><?php echo $GLOBALS['error']; ?></p>
		</div></center>
		<div id="border" style="position:fixed;top:0px;font-weight:bold;left:-2px;"><p style="color:black;">Follow us on:</p><a href="https://www.facebook.com/"><img src="fb.jpg" height="30px" width="30px"></a>
			<a href="https://www.instagram.com/"><img src="insta.png" height="30px" width="30px"></a>
			<a href="https://www.twitter.com/"><img src="twitter.jpg" height="30px" width="30px"></a></div>
		</div>
		</div>
		</body></html>