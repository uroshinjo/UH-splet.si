<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="icon" href="slike/favicon.ico" >
<title>Domov | Uroš Hrastar</title>

</head>
<body>
<div id="glava">
<div id="glava_not">
<img src="slike/logo.png"  onClick="location.href='index.php'" id="logo"/>
<div id="meni">
<a href="index.php" style="color:#e75d5d;">Domov</a>
<a href="splet.php">Spletne strani</a>
<a href="delo.php">Moje delo</a>
<a href="kontakt.php">Kontakt</a>



</div>

</div>
</div>


<div id="telo">
<center><h1>Dobrodošli!</h1>
<p style="color:#a4a5a5;">Brez spletne strani vaše podjetje za večino populacije ne obstaja, saj vsi iščemo storitve prek spleta.<br />
Dejstvo je, da potencialne stranke, ki slišijo za vaše podjetje, ne morejo preveriti vaše ponudbe, če je hitro ne najdejo preko interneta.<br />
Ponujam vam poceni ter hitro izdelavo privlačnih in uporabnih spletnih strani.<br />
Več informacij lahko poiščete spodaj.
</p>
</center>
<div id="kvadrati">

<div id="rdec"><br />
<center><img src="slike/1.png" /><br /><h5>SPLETNE STRANI</h5>
Želite svojo spletno stran?<br /> Začnite tukaj.</center>
<div id="gumb1" onClick="location.href='splet.php'"><center><img style="margin-top:15px;" src="slike/dol.png" /></center></div>
</div>

<div id="rumen"><br />
<center><img src="slike/2.png" /><br /><h5>REFERENCE</h5>
<p>Že izdelane strani zadovoljnih uporabnikov.</p>
</center>
<div id="gumb2" onClick="location.href='delo.php'"><center><img style="margin-top:15px;" src="slike/dol.png" /></center></div>
</div>

<div id="zelen"><br />
<center><img src="slike/3.png" /><br /><h5>PAKETI</h5>
<p>Osnovne ponudbe za izdelavo spletnih strani.</p>
</center>

<div id="gumb3" onClick="location.href='splet.php#paketi'"><center><img style="margin-top:15px;" src="slike/dol.png" /></center></div>
</div>

</div>

<a id="dol" href="#"><div id="dol" ><center><img style="margin-top:15px;" src="slike/dol.png" /></center></div></a>

<br />
<br />
<br />

<div id="sredina">
<div id="sredina_levo"><br /><br /><center><img width="250px" src="slike/spec.png" /></center></div>
<div id="sredina_desno"><h3 style="margin-left:50px;">Posebna ponudba!</h3><br />
<p  style="color:#a4a5a5; margin-left:50px;">
Želite svojo novo stran čim prej?<br />
Z izbiro že obstoječega dizajna dobite stran ceneje in je pripravljena za uporabo že v roku enega tedna.
<br />
<br />
<a href="#"><div class="vec"><center>VEČ</center></div></a>

</p>
</div>
</div>

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
<div id="novice">
<h2>Novice iz sveta računalništva</h2>
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
