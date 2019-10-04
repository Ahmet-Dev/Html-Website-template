<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" type="image/png" href="img/logo.jpg"/>
    <title>Welcome Tartarus</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="typed.js-master/dist/typed.min.js" rel="stylesheet" />
<style>
@font-face
{
	font-family: screenAlpha;
	src:url(vendor/font-awesome/fonts/Perfect%20DOS%20VGA%20437.ttf);
	    font-weight: normal;
		 font-style: normal;
}
@font-face
{
	font-family: gameFont;
	src:url(vendor/font-awesome/fonts/BOYCOTT_.TTF);
		font-weight: normal;
		 font-style: normal;
}
body
{
	width:100%;
	height:100%;
	background-color:#000;
	color:#66FF66;
	text-shadow:0px 0px 6px #66FFFF;
	font-size:1.25em;
	font-family:screenAlpha;
	background-image:url(img/Extras/HighresScreenshot00003.png);
	background-size:100% !important;
}
#head
{
	margin-left:49%;
	margin-top:10%;
}
#ekran
{
	margin-left:32%;
	margin-top:1%;	
}
#ekran2
{
	margin-left:32%;	
}
#ekran3
{
	margin-left:32%;	
}
#ekran4
{
	margin-left:32%;	
}
#ekran5
{
	margin-left:32%;	
}
#ekran6
{
	margin-left:32%;	
}
.typed-cursor{
	margin-left:32%;
    opacity: 0.5;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
</style>
<style>
</style>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="typed.js-master/js/typed.js"></script>
    <script src="device.js-master/lib/device.js"></script>
    <script>
	$(document).ready(function(e) {		
		if(device.mobile())
		{
			$.ajax({url:"loader.php",success: function(result)
			{	$("#ekran").html(result);		}});
		}else if(device.tablet())
		{
			$.ajax({url:"loader.php",success: function(result)
			{	$("#ekran").html(result);		}});
		}else if(device.desktop())
		{
			setTimeout(function() {
			$("#head").typed({
			strings:	["<br>","Tartarus"],
			typeSpeed:	100,
			showCursor: false
			});
			});
		setTimeout(function() {
			$("#ekran").typed({
			strings:	["<br>","System created by Abyss Gameworks.<br>FARLINK SYSTEMS<br>ID:admin<br>Pass:*******<br>ID or Password is wrong.Try again.<br>"],
			typeSpeed:	0,
			showCursor: false
			});
			},3000);
		setTimeout(function() {
			$("#ekran2").typed({
			strings:	["<br>","C:/Users/Guest>net user<br> System-----------Admin-----------Andrews<br>The command completed sucsessfully.<br>"],
			typeSpeed:	0,
			showCursor: false
			});
			},9000);
			setTimeout(function() {
			$("#ekran3").typed({
			strings:	["<br>","C:/copy X:/Files/Hack/Breaker.tolga C:/Users <br>C:/Users/Breaker.bash<br>Please write id...Andrews"],
			typeSpeed:	0,
			showCursor: false
			});
			},15000);
		setTimeout(function() {
			$("#ekran4").typed({
			strings:	["<br>","Password:tartarus<br>FARLINK SYSTEMS<br>"],
			typeSpeed:	0,
			showCursor: false
			});
			},20000);
			setTimeout(function() {
			$("#ekran5").typed({
			strings:	["<br>","ID:admin<br>Pass:*******<br>ID and Password is true.<br>Command List<br>download----Download Tartarus<br>load----Start Game<br>commnity----Go to Facebook page<br>webpage----Login tartarusthegame.com<br>C:/Users/Admin/cleanmgr<br>C:/Users/Admin/webpage"],
			typeSpeed:	0,
			showCursor: true
			});
			},23000);			
		}
    });
	</script>
    <?php header("refresh:40;url=index.php"); ?>
</head>

<body>
<header>
<div id="head" style="font-family:gameFont; font-size:4em;"></div>
</header>
<section>
<div id="ekran"></div>
<div id="ekran2"></div>
<div id="ekran3"></div>
<div id="ekran4"></div>
<div id="ekran5"></div>
<div id="ekran6"></div>
</section>
<footer>

</footer>
</body>
</html>
