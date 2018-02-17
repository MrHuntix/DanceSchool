<!DOCTYPEhtml>
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
       <ul class="p" style="padding:10px;position:absolute;top:80px;padding-left:400px;">

         <li class="q" style="float:left;font-size:15px;padding:5px;padding-right:5px;font-family:Orbitron"><a href="dance1.php">HOME</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="ask.php">ASK US</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="beats.php">BEATS</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="learnup.php">LEARN UP</a></li>				
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
		
	
			
			
		<center><div id="sectionreg1" style="font-size:20px;">
			<p>Thank you for registering .
			You can now login from our home page and see the questions which relates to your expertice.
			You can always ask questions your self and interact with other users.</p>
			<!--<?php //header('Refresh:5;url=indx.php'); ?>-->
		</div></center>
		<div id="border" style="position:fixed;top:0px;font-weight:bold;"><p style="color:black;">Follow us on:</p><a href="https://www.facebook.com/"><img src="fb.jpg" height="30px" width="30px"></a>
			<a href="https://www.instagram.com/"><img src="insta.png" height="30px" width="30px"></a>
			<a href="https://www.twitter.com/"><img src="twitter.jpg" height="30px" width="30px"></a></div>
		</div>
		
	</body>
</html>
		


