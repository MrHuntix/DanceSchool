<?php
	require 'dbase.php';
	include 'login.php';
	$uname="";
	if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
	{
		$uname=$_SESSION['username'];
	}
	
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="song.js"></script>
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
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			    if (xhttp.readyState == 4 && xhttp.status == 200) {
			        myFunction(xhttp);
			    }
			};
			xhttp.open("GET", "https://itunes.apple.com/us/rss/topsongs/limit=25/xml", true);
			xhttp.send();

			function myFunction(xml) {
			    var xmlDoc = xml.responseXML;
			    var x = xmlDoc.getElementsByTagName("title")
			for(var i=0;i<=x.length;i++)
			{
			if(i==0)
			{i=""}
			else
			{    
			document.getElementById("demo").innerHTML += i+"- " +x[i].childNodes[0].nodeValue +"<br>";
			}}
			}
		</script>
	</head>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Short+Stack" />
	<link rel="stylesheet" type="text/css" href="try.css">
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

	
			
		

		
		<center><div  id="tata1" style="padding-top:20px;position:relative;margin-top:50px;">
			
			<center><p id="bsong"><center ><h2 ><b><ul>TOP 10 BEATS</ul></b></h2></center></p>
            <h5><center>(Hover over the title to play the song.)</center></h5>
            
			<!--<p id="demo"></p>-->
			
            <br>
           <p>
           <ul style="list-style: none;">
            <li>
            <div class="s1">
                CHEAP THRILLS - SIA FEATURING SEAN PAUL
             <audio src="cheapthrills.mp3" preload="auto"></audio>
             </div> 
             </li>
         
             <li>
            <div class="s2">
                ONE DANCE - DRAKE FEATURING WIZKID & KYLA     
             <audio src="onedance.mp3" preload="auto"></audio>
             </div> 
             </li>
             <li>
            <div class="s3">
                THIS IS WHAT YOU CAME FOR - CALVIN HARRIS FEATURING RIHANNA     
             <audio src="thisiswhatyoucamefor.mp3" preload="auto"></audio>
             </div> 
             </li>
             <li>
            <div class="s4">
            CAN'T STOP THE FEELING - JUSTIN TIMBERLAKE
                     
             <audio src="cantstopthefeeling.mp3" preload="auto"></audio>
             </div> 
             </li>
             <li>
            <div class="s5">
              DON'T LET ME DOWN - THE CHAINSMOKERS FEATURING DAYA       
             <audio src="dontletmedown.mp3" preload="auto"></audio>
             </div> 
             </li>
             <li>
            <div class="s6">
              RIDE - TWENTY ONE PILOTS       
             <audio src="ride.mp3" preload="auto"></audio>
             </div> 
             </li>
             <li>
            <div class="s7">
              NEEDED ME - RIHANNA        
             <audio src="neededme.mp3" preload="auto"></audio>
             </div> 
             </li>
             <li>
            <div class="s8">
              PANDA - DESIIGNER       
             <audio src="panda.mp3" preload="auto"></audio>
             </div> 
             </li>
               <li>
            <div class="s9">
           SEND MY LOVE - ADELE     
             <audio src="sendmylove.mp3" preload="auto"></audio>
             </div> 
             </li>
               <li>
            <div class="s10">
             ME TOO - MEGHAN TRAINOR       
            <audio src="metoo.mp3" preload="auto"></audio>
             </div> 
             </li>
             </ul>
             <div id="border" style="position:fixed;top:0px;left:-2px;font-weight:bold;"><p style="color:black;">Follow us on:</p><a href="https://www.facebook.com/"><img src="fb.jpg" height="30px" width="30px"></a>
			<a href="https://www.instagram.com/"><img src="insta.png" height="30px" width="30px"></a>
			<a href="https://www.twitter.com/"><img src="twitter.jpg" height="30px" width="30px"></a></div>
		

		
</div>
		
	</body>
</html>