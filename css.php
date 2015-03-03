<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="icon" href="slike/favicon.ico" >
<title>CSS | Uroš Hrastar</title>
<style>
p{line-height:25px;}
</style>
</head>
<body>
<div id="glava">
<div id="glava_not">
<img src="slike/logo.png"  onClick="location.href='index.php'" id="logo"/>
<div id="meni">
<a href="index.php">Domov</a>
<a href="splet.php">Spletne strani</a>
<a href="delo.php">Moje delo</a>
<a href="kontakt.php">Kontakt</a>



</div>

</div>
</div>


<div id="telo">

<h2>CSS</h2>
<p style="width:700px;">
<b>Cascading Style Sheets</b><br />
poznane pod kratico CSS so podloge, predstavljene v obliki preprostega slogovnega jezika, ki skrbi za 
prezentacijo spletnih strani. Z njimi definiramo stil HTML oz. XHTML elementov v smislu pravil, kako se naj ti prikažejo na strani. Določamo lahko barve, 
velikosti, odmike, poravnave, obrobe, pozicije in vrsto drugih atributov, prav tako pa lahko nadziramo aktivnosti, ki jih uporabnik nad elementi strani izvaja 
(npr. prekritje povezave z miško). 
Podloge so bile razvite z namenom konsistentnega načina podajanja informacij o stilu spletnim dokumentom.
</p>
<p style="width:700px;">
Bistvo uporabe CSS je poleg defirniranja pravil, pred vsem ločitev strukture strani - ki jo podaja označevalni jezik skupaj z vsebino - od njene predstavitve. S tem omogočimo lažje urejanje in dodajanje stilov ter poskrbimo za večjo preglednost dokumentov temelječih na HTML sintaksi. Prav tako zmanjšamo ponavljanja kode, saj omogočimo množici strani uporabo istih podlog, kar lahko bistveno zmanjša njihovo velikost.
</p>
<br />
<br />
<br />
<br />
<p id="back-top">
		<a href="#"><span></span></a>
	</p>
</div>

<div id="sredina2">
<center><h4>Tehnologije za izdelavo spletnih strani</h4></center>
<div id="sredina2_not"><br />
<div class="okvircek1"><a href="html.php">HTML</a></div>
<div class="okvircek2"><a href="css.php">CSS</a></div>
<div class="okvircek3"><a href="php.php">PHP</a></div>
<div class="okvircek4"><a href="javascript.php">Javascript</a></div>
</div>
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
