<?php
	require 'dbase.php';
	include 'login.php';
	$uname1="";
	if(!isset($_SESSION['username'])&&empty($_SESSION['username']))
	{
		header("Location:youarenotloggedin.php");
	}
	if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
	{
		$uname1=$_SESSION['username'];
	}
	if(isset($_GET['comment'])&&!empty($_GET['comment']))
	{
		$comment=$_GET['comment'];
		$na=$_GET['cname'];
		$commentq="UPDATE questions SET answer='$comment' WHERE name='$na'";
		$qr=mysql_query($commentq);
	}
	
?>
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
<div id="grad1">
<div id="grad2">
<div class="clearHeader"  style="background: rgba(0,0,0, 1 );">
<!--<h3 style="float:left;"><a href="https://www.google.co.in/"><img src="C:\Users\shafiq\Desktop\web_dev_and_java_app_dev\posh-font.png" style="height:40px;width:150px;opacity:1px;"></a></h3>-->
    <header>
    <img src="http://allstreetdance.co.uk/wp-content/uploads/2010/06/logo-got-to-dance-black.jpg" height="120px" width="350px" style="position:relative;top:0px;">
       <ul class="p" style="padding:10px;position:absolute;top:80px;padding-left:410px;">

         <li class="q" style="float:left;font-size:15px;padding:5px;padding-right:5px;font-family:Orbitron"><a href="dance1.php">HOME</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="ask.php">ASK US</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron"><a href="beats.php">BEATS</a></li>
  <li class="q" id="new" style="float:left;font-size:15px;padding:5px;font-family:Orbitron;">
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
	<li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron;"><a href="answer.php">ANSWER</a></li>         
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
			 	echo "Welcome ".$uname1;
			 } 
			 else
			 {
			 	echo "HELLO";
			 }

			 ?></a></li>
		</ul>
		
	
			 
</div>
		<div id="secans"  style="margin-top:100px;top:70px;position:relative;left:-50px;right:0px;overflow:auto;"">
			<?php
			$q="SELECT * FROM questions";
			$i=1;
				$qr=mysql_query($q);
				while($row=mysql_fetch_assoc($qr))
					{
						?>
					<p><?php
					echo "name:".$row['name'];
					echo "<br>";
					echo "question:".$row['question']."?";
					echo "<br>";
					echo "style:".$row['style']."<br>";
					echo "email:";
					echo '<a  style="text-decoration: none;" href="mailto:';
					echo $row['email'].'?'.'subject='.str_replace(" ","%20",$row['question']).'&body=Please fill up this field with an answer';
					echo '">';
					echo $row['email'];
					echo '</a><br>';
					echo "answer:".$row['answer'];
					echo "<br><br>";
					$i++;
					}
				?></p>

				<hr color="black">		
				<p>To view all questions(based on your style)</p>
				<a href="answer.php" style="text-decoration: none;"> click here. <a>
		</div>
		<div id="cmt" style="position:relative;top:70px;left:-50px;right:0px;">
			<p>ENTER YOUR ANSWER HERE</p>
			<form action="ind.php" methord="GET">
			<input type="text" name="comment" placeholder="Enter your answer here">
			<input type="text" name="cname" placeholder="Enter your name here">
			<button>ANSWER</button><br>
			</form>
		</div>
		<div id="border" style="position:fixed;top:0px;left:-2px;font-weight:bold;"><p style="color:black;">Follow us on:</p><a href="https://www.facebook.com/"><img src="fb.jpg" height="30px" width="30px"></a>
			<a href="https://www.instagram.com/"><img src="insta.png" height="30px" width="30px"></a>
			<a href="https://www.twitter.com/"><img src="twitter.jpg" height="30px" width="30px"></a></div>
	</body>
</html>

