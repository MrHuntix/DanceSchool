<?php
	require 'session.php';
	header('Cache-Control: no-cache, must-revalidate');
	header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />
<link rel="stylesheet" type="text/css" href="try.css">
<script >
    $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".clearHeader").addClass("darkHeader");
    } else {
        $(".clearHeader").removeClass("darkHeader");
    }
});</script>
<script src="jssor.slider.mini.js"></script>
</head>

<body style="margin:0px;">
<div id="grad1">
<div class="clearHeader">
<!--<h3 style="float:left;"><a href="https://www.google.co.in/"><img src="C:\Users\shafiq\Desktop\web_dev_and_java_app_dev\posh-font.png" style="height:40px;width:150px;opacity:1px;"></a></h3>-->
    <header>
    <img src="http://allstreetdance.co.uk/wp-content/uploads/2010/06/logo-got-to-dance-black.jpg" height="120px" width="350px" style="position:relative;top:0px;">
       <ul class="p" style="padding:10px;position:absolute;top:80px;padding-left:435px;">

         <li class="q" style="float:left;font-size:15px;padding:5px;padding-right:5px;font-family:Orbitron;
"><a href="dance1.php">HOME</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron;"><a href="ask.php">ASK US</a></li>
  <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron;"><a href="beats.php">BEATS</a></li>
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
		
         
         <li class="q" style="float:left;font-size:15px;padding:5px;font-family:Orbitron;"><a href="logout.php">LOG OUT</a></li>
         
 
</ul>     
    </header>
    <ul style="list-style-type: none;">
      <li class ="q" style="float:right;left:1180px;padding:5px;font-size:25px;top:10px;position:absolute;font-family:Orbitron" id="sh" ><a>
        <?php
       if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
       {
        echo "Welcome ".$user_check;
       } 
       else
       {
        echo "HELLO";
       }
       ?></a></li>
    </ul>
    </div>
    

<div class="content">

    
    <!-- #region Jssor Slider Begin -->
   <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {          
            
              var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1800,x:1,y:0.2,$Delay:30,$Cols:10,$Rows:5,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Outside:true,$Round:{$Top:1.3}},
              {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,y:-1,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12}},
              {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url(''  b05.png'') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 650px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url(''loading.gif'') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 650px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="https://i.ytimg.com/vi/VTecF5ZHjR0/maxresdefault.jpg"  style="padding:0px;" />

            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="http://estireholidays.com/wp-content/uploads/2014/05/kathakali_welcome-e1405620147532.jpg" style="padding:0px;" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="http://static1.squarespace.com/static/55d39622e4b0e79345b0501a/t/55e06221e4b0ca67a5663b9d/1440768546839/The+Portland+Ballet+Company" style="padding:0px;" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="http://www.redhotrhythm.com.au/wp-content/uploads/2014/10/RedHotRhythm-Tap-Dance-Brisbane42.jpg" style="padding:0px;" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="http://www.tamarindtribalbellydance.com/images/France1.jpg" style="padding:0px;" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="http://www.judysballroomdancelessons.com/images/background-img-6a.jpg" style="padding:0px;" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="http://www.borntotrick.com/wp-content/uploads/2014/07/freeze.jpg" style="padding:0px;" />
            </div>
            <a data-u="add" href="http://www.jssor.com" style="display:none">Jssor Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>

    <!-- #endregion Jssor Slider End -->
    <pre>
<h2 ><pre class="hh2" style="text-align:center;">~ Quotes ~
* Dance is like poetry in motion.
Dance is the hidden language of the soul.
Do the cha-cha , do the tango
Do the Rock-and-Roll. *</pre></h2>

</pre>
<ul class="img-list">
    <li style="width:32.5%">   
     <a href="https://en.wikipedia.org/wiki/Hip-hop_dance">
      <img src="http://f.tqn.com/y/dance/1/W/I/E/-/-/200405175-001.jpg" width="100%" height="350" />
      <span class="text-content"><span>
<h1>Hip-hop</h1>  Hip-hop dance refers to street dance styles primarily performed to hip-hop music or that have evolved as part of hip-hop culture. It includes a wide range of styles primarily breaking, locking, and popping which were created in the 1970s and made popular by dance crews in the United States. </span></span></a>
  </li>
  <li style="width:61.5%">
    <a href="https://en.wikipedia.org/wiki/Contemporary_dance">
      <img src="http://f.tqn.com/y/dance/1/W/a/F/-/-/5597628657_72527bb01a_b.jpg" width="100%" height="350" />
      <span class="text-content"><span><h1>Contemporary</h1>Contemporary dance is a dance performance genre that developed during the mid twentieth century and has since grown to become one of the dominant genres for formally trained dancers throughout the world, with particularly strong popularity in the U.S. and Europe. Although originally informed by and borrowing from classical, modern, and jazz styles, it has since come to incorporate elements from many styles of dance.</span></span>
    </a>
  </li>
  <li style="width:61.5%"> 
    <a href="https://en.wikipedia.org/wiki/Jazz_dance">
      <img src="http://f.tqn.com/y/dance/1/W/F/E/-/-/200346256-001.jpg" width="100%" height="350" />
      <span class="text-content"><span><h1>Jazz</h1> Jazz dance is shared by a large range of dance styles. Before the 1950s, jazz dance related to dance styles that originated from African American vernacular dance. Jazz dance was an integral part of jazz until the end of the swing era in the late 1940s.[1] In the 1950s, a new genre of jazz dance — modern jazz dance — emerged, with roots in Caribbean traditional dance. Every individual style of jazz dance has roots traceable to one of these two distinct origins. Jazz was a big hit in the early 1950s and it is still a well-loved style of dance all over the world.</span></span>
    </a>
  </li>
  <li style="width:32.5%"> 
    <a href="https://en.wikipedia.org/wiki/Tap_dance">
      <img src="http://f.tqn.com/y/dance/1/W/u/F/-/-/3314872_1280.jpg" width="100%" height="350" />
      <span class="text-content"><span><h1>Tap</h1> Tap dance is a form of dance characterized by using the sounds of tap shoes striking the floor as a form of percussion. Two major variations on tap dance exist: rhythm (jazz) tap and Broadway tap. Broadway tap focuses on dance; it is widely performed in musical theater. Rhythm tap focuses on musicality, and practitioners consider themselves to be a part of the Jazz tradition. </span></span>
    </a>
  </li>
  <li style="width:32.5%"> 
    <a href="https://en.wikipedia.org/wiki/Ballet">
      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Wiener_Staatsoper_Schwanensee_Szene_Akt4.jpg" width="100%" height="350" />
      <span class="text-content"><span><h1> Ballet</h1> Ballet /ˈbæleɪ/ (French: [balɛ]) is a type of performance dance that originated in the Italian Renaissance courts of the 15th century and later developed into a concert dance form in France and Russia. It has since become a widespread, highly technical form of dance with its own vocabulary based on French terminology. It has been globally influential and has defined the foundational techniques used in many other dance genres. Becoming a ballet dancer requires years of training. Ballet has been taught in various schools around the world, which have historically incorporated their own cultures to evolve the art.</span></span>
    </a>
  </li><li style="width:61.5%"> 
    <a href="https://en.wikipedia.org/wiki/Lindy_Hop">
      <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQhPHA4dW9UAXsP-qeOueySK5yUX0Mg7KbkLQKpRHSCa2dVtfZB" width="100%" height="350" />
      <span class="text-content"><span><h1>Lindy hop </h1>The Lindy hop is an American dance that evolved in Harlem, New York City, in the 1920s and 1930s and originally evolved with the jazz music of that time. It was very popular during the Swing era of the late 1930s and early 1940s. Lindy was a fusion of many dances that preceded it or were popular during its development but is mainly based on jazz, tap, breakaway, and Charleston. It is frequently described as a jazz dance and is a member of the swing dance family.</span></span>
    </a>
  </li>
</ul><pre>
<h2><center class="cc">Dancing for a cause</center></h2><iframe width="1340" height="400" src="https://www.youtube.com/embed/inuR_GROFG0" frameborder="0" allowfullscreen style="float:center;position:relative"></iframe>
</pre>
</div>
</body>
</html>