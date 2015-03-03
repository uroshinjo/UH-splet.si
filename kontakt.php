<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="icon" href="slike/favicon.ico" >
<title>Kontakt | Uroš Hrastar</title>

</head>
<body>
<div id="glava">
<div id="glava_not">
<img src="slike/logo.png"  onClick="location.href='index.php'" id="logo"/>
<div id="meni">
<a href="index.php">Domov</a>
<a href="splet.php">Spletne strani</a>
<a href="delo.php">Moje delo</a>
<a href="kontakt.php" style="color:#e75d5d;">Kontakt</a>



</div>

</div>
</div>


<div id="telo" style="padding-bottom:100px;">
<h1>Kontakt</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2788.6539856678464!2d15.315215299999998!3d45.657770000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47644fdf0c56d8f5%3A0x61fc020b67dc70bf!2sPot+na+Veselico+30%2C+8330+Metlika!5e0!3m2!1ssl!2ssi!4v1411675798662" width="1000" height="400" frameborder="0" style="border:0"></iframe>
<div id="pov"></div>
<h2>Pošljite povpraševanje</h2>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <input class="input" type="email" name="from" placeholder="Vaš E-mail.."><br>
  <?php
  $sub=$_GET['subject'];
  
  if(!isset($sub)){
  echo '<input class="input" type="text" name="subject" placeholder="Zadeva.."><br>';
  }else{
  if($sub=='zeleni'){
  echo '<input class="input" type="text" name="subject" style="border:2px solid #5eb28f;" placeholder="Zadeva.." value="Povpraševanje - Zeleni paket"><br>';
  }
  if($sub=='rumeni'){
  echo '<input class="input" type="text" name="subject" style="border:2px solid #f1a733;" placeholder="Zadeva.." value="Povpraševanje - Rumeni paket"><br>';
  }
  if($sub=='rdeci'){
  echo '<input class="input" type="text" name="subject" style="border:2px solid #e75d5d;" placeholder="Zadeva.." value="Povpraševanje - Rdeči paket"><br>';
  }
  }
  
  ?>
  
  <textarea class="input" rows="10" cols="40" name="message" placeholder="Sporočilo.."></textarea><br>
  <input class="poslji" type="submit" name="submit" value="Pošlji">
  </form>
  <?php 
} else { 
  
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; 
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $message = wordwrap($message, 70);
    
    mail("hrastar.uros@gmail.com",$subject,$message,"Posiljatelj: $from\n");
    echo "Sporočilo je bilo poslano. Hvala!";
  }
}
?>

<p id="back-top">
		<a href="#"><span></span></a>
	</p>
</div>



<div id="noga">
<div id="noga_sredina">

<span style="line-height:80px; font-size:14px;">Izdelava: UH-splet.si   &copy;   Vse pravice pridržane</span>

</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<script>
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#dol').click(function () {
			$('body,html').animate({
				scrollTop: 800
			}, 1000);
			return false;
		});
		
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
		
	});

});


</script>
<script>

var glava, yPos, meni, logo;

function yScroll(){
	glava = document.getElementById('glava');
	logo = document.getElementById('logo');
	meni = document.getElementById('meni');
	
	yPos = window.pageYOffset;
	
	
	
	if(yPos > 80){
	glava.style.height = "60px";
	logo.style.width = "55px";
	meni.style.opacity = "0";
	}else{
	glava.style.height = "90px";
	logo.style.width = "85px";
	meni.style.opacity = "1";
	}
		
	
	
}
window.addEventListener("scroll", yScroll);

</script>

</body>
</html>
