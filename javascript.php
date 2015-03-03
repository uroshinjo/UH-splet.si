<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="icon" href="slike/favicon.ico" >
<title>Javascript | Uroš Hrastar</title>
<style>
p{line-height:25px;}
</style>
</head>
<body>
<div id="glava">
<div id="glava_not">
<img src="slike/logo.png"  onClick="location.href='index.php'" id="logo"/>
<div id="meni">
<a href="index.php" >Domov</a>
<a href="splet.php">Spletne strani</a>
<a href="delo.php">Moje delo</a>
<a href="kontakt.php">Kontakt</a>



</div>

</div>
</div>


<div id="telo">

<h2>Javascript</h2>
<p style="width:700px;">
JavaScript je objektni skriptni programski jezik, ki ga je razvil Netscape, da bi spletnim programerjem pomagal pri ustvarjanju interaktivnih spletnih strani.
<br />
Jezik je bil razvit neodvisno od Jave, vendar si z njo deli številne lastnosti in strukture. JavaScript lahko sodeluje s HTML-kodo in s tem poživi stran z dinamičnim izvajanjem. JavaScript podpirajo velika programska podjetja in kot odprt jezik ga lahko uporablja vsakdo, ne da bi pri tem potreboval licenco. Podpirajo ga vsi novejši spletni brskalniki.
</p>
<p style="width:700px;">

Sintaksa jezika JavaScript ohlapno sledi programskemu jeziku C. Prav tako kot C, JavaScript nima vgrajenih vhodno izhodnih funkcij, zato je njihova izvedba odvisna od gostitelja.
<br /><br />
JavaScript se veliko uporablja za ustvarjanje dinamičnih spletnih strani. Program se vgradi ali pa vključi v HTML, da opravlja naloge, ki niso mogoče samo s statično stranjo. Na primer odpiranje novih oken, preverjanje pravilnost vnesenih podatkov, enostavni izračuni ipd. Na žalost različni spletni brskalniki izpostavijo različne objekte za uporabo. Za podporo vseh brskalnikov je zato treba napisati več različic funkcij.
<br /><br />
Zunaj spleta se JavaScript uporablja v različnih orodjih. Adobe Acrobat in Adobe Reader ga podpirata v datotekah PDF. Podpirata ga tudi operacijska sistema Microsoft Windows in Mac OS X.
<br /><br />
Programi imajo svoje objektne modele, ki zagotavljajo dostop do gostiteljevega okolja, samo jedro jezika JavaScript pa je v vseh programih večinoma enako.

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
