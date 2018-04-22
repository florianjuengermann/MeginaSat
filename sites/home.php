<script type="text/javascript"> 
document.getElementById("a1").classList.remove("selA");
document.getElementById("a2").classList.remove("selA");
document.getElementById("a3").classList.remove("selA");
document.getElementById("a4").classList.remove("selA");
document.getElementById("a5").classList.remove("selA");
</script>
<link rel="stylesheet" type="text/css" href="sites/home.css">

<div id="title">
  <div class="titleImg titleLeft" id="titleImg0">
  </div>
  <div class="titleImg" id="titleImg1">
  </div>
  <div class="titleImg titleRight" id="titleImg2">
  </div>

  <a href="" onclick="right();return false;"	>
    <div class="arrow" id="rightArrow">  
    </div>
  </a> 
  <a href="" onclick="left();return false;">   
    <div class="arrow" id="leftArrow">
    </div>
  </a>
  
  <div id="pageIndicator">
  		<div id="ind0" ></div>  
  		<div id="ind1" class="current" ></div>  
  		<div id="ind2" ></div>  
  </div>

</div>
 <div class="clear2"></div>
<div id="wrapper">
	<div class="contentClass">
		<div class="heading">
			<h2 class="EN">
				New Perspectives
			</h2>
			<h2 class="DE">
				Neue Perspektiven
			</h2>
			<div class="underscore"></div> 
		</div>
		<div class="image" style="background-color: #171e2d; background-image: url('../img/earthGraphic.png')" ></div>
		<div class="text EN">
			The MGMCube is a nanosatellite which is going to be launched onto a low earth orbit. There it is going to take <b>pictures</b> of earth and other celestial bodys. It <b> transmits </b> these images to the ground station in Mayen (Germany). Visit <a href="#" onclick="nav('project')">Our Project</a> page for a detailed explanation.
		</div>
		<div class="text DE">
			Der MGMCube ist ein Nanosatellit, der in den Erdorbit geschickt wird und dort <b>Fotos</b> von der Erde und anderen Himmelskörpern macht. Diese Daten sendet er dann zur Bodenstation in Mayen. Klicken Sie  <a href="#" onclick="nav('project')">hier</a> für mehr Informationen zu unserem Projekt.
		</div>
	</div>
	<div class="divider"></div>

	<div class="contentClassRight">
		<div class="headingRight">
			<h2 class="EN">
				Impressive Technology
			</h2>
			<h2 class="DE">
				Beeindruckende Technologie
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="imageRight" style="background-color: #b3aaba; background-image: url('../img/Cubesat.jpg')" ></div>
		<div class="textRight EN">
			The 10cm small case comprises a variety of components. These include an antenna system, a high-resolution camera, three magnetorquers, sun sensors and solar cells and <a href="#" onclick="nav('project')">more </a>.
		</div>
		<div class="textRight DE">
			In dem 10cm großen Gehäuse ist eine Vielzahl an Komponenten untergebracht. Verbaut wird ein Antennesystem, eine hochauflösende Kamera, drei Elekromagneten, Sonnesensoren und Solarzellen und <a href="#" onclick="nav('project')">mehr</a>.
		</div>
	</div>
	<div class="divider"></div>

	<div class="contentClass">
		<div class="heading">
			<h2 class="EN">
				NEWS: New Sponsor
			</h2>
			<h2 class="DE">
				NEWS: Neuer Sponsor
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="image" style="background-color: black; background-image: url('../img/earth.jpg')" ></div>
		<div class="text EN">
			Kreisparkasse Sparkasse Mayen is our latest Sponsor. Visit <a href="#" onclick="nav('news')">this page</a> page for further information.
		</div>
		<div class="text DE">
			Die Kreissparkasse Mayen ist unser neuster Sponsor!<a href="#" onclick="nav('news')">Hier</a> geht’s zum Artikel! Besuchen Sie auch unsere <a href="#" onclick="nav('sponsors')">Sponsoren Seite</a>um alle Unterstützer zu finden oder um selbst Sponsor zu werden.
		</div>
	</div>
	<div class="divider"></div>

	<div class="contentClassRight">
		<div class="headingRight">
			<h2 class="EN">
				Our Team
			</h2>
			<h2 class="DE">
				Unser Team
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="imageRight" style="background-color: white; background-image: url('../img/Team.jpg')" ></div>
		<div class="textRight EN">
			We are eight high school students from the Megina-Gymnasium in Mayen, Germany. A radio amateur and a teacher complete our team. The work is distributed among small workgroups. For a detailed list of participants and workgroups please visit <a href="#" onclick="nav('team')">Our Team </a> page.
		</div>
		<div class="textRight DE">
			Wir sind acht Schüler des Megina-Gymnasiums in Mayen. Ein Funkamateur und ein Lehrer ergänzen unser Team, arbeiten aber nicht selber in den Gruppen, sondern koordinieren und leiten das Projekt. Wir entwickeln den Cubesat in geteilten Arbeitsgruppen und führen dann unsere Ergebnisse zusammen. Eine detaillierte Liste aller Beteiligten und Arbeitsgruppen finden Sie auf unserer <a href="#" onclick="nav('team')">Team </a> Seite.
		</div>
	</div>
	<div class="divider"></div>
	
	<div class="contentClass">
		<div class="heading">
			<h2 class="EN">
				Our Sponsors
			</h2>
			<h2 class="DE">
				Our Sponsors
			</h2>
			<div class="underscore"></div>
		</div>
		<div class="image" style="background-color: white; background-image: url('../img/sponsor.png')" ></div>
		<div class="text EN">
			Without financial support such an amazing project would not be possible. Visit <a href="#" onclick="nav('sponsors')">Our Sponsors</a> page to see who is helping us.
		</div>
		<div class="text DE">
			Ohne finanzielle Hilfe wäre solch ein großes Projekt nicht möglich. Deshalb sind wir besonders dankbar für unsere SPONSOREN, die uns unterstützen. Besuchen Sie unsere <a href="#" onclick="nav('sponsors')">Sponsoren</a> Seite um alle Unterstützer zu finden oder um selbst Sponsor zu werden.
		</div>
	</div>
</div>

<?php 
/*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$temlate = file_get_contents("sites/articleTL.txt");
	$heading = "The Misson";
	$bcol = "black";
	$img = "earth.jpg";
	$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat molestie mi quis imperdiet. Aenean eu est imperdiet, sollicitudin mi vitae, placerat est. Nunc accumsan sodales facilisis. Vivamus scelerisque lorem nec mauris lacinia faucibus. Nam lacinia tellus eget elit sollicitudin dapibus. Maecenas lacinia ante facilisis nibh vulputate varius. Praesent pretium elit eu nisl interdum, eget suscipit sapien volutpat. Praesent nulla turpis, convallis quis sapien id, semper feugiat magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vestibulum dapibus tellus at sagittis.<br>

		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat molestie mi quis imperdiet. Aenean eu est imperdiet, sollicitudin mi vitae, placerat est. Nunc accumsan sodales facilisis. Vivamus scelerisque lorem nec mauris lacinia faucibus.";

	echo sprintf($temlate, $heading, $bcol, $img, $text);

	$temlate = file_get_contents("sites/articleRightTL.txt");
	$heading = "The Sponsors";
	$bcol = "transparent";
	$img = "sponsor.png";
	$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat molestie mi quis imperdiet. Aenean eu est imperdiet, sollicitudin mi vitae, placerat est. Nunc accumsan sodales facilisis. Vivamus scelerisque lorem nec mauris lacinia faucibus. Nam lacinia tellus eget elit sollicitudin dapibus. Maecenas lacinia ante facilisis nibh vulputate varius. Praesent pretium elit eu nisl interdum, eget suscipit sapien volutpat. Praesent nulla turpis, convallis quis sapien id, semper feugiat magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vestibulum dapibus tellus at sagittis.<br>

		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat molestie mi quis imperdiet. Aenean eu est imperdiet, sollicitudin mi vitae, placerat est. Nunc accumsan sodales facilisis. Vivamus scelerisque lorem nec mauris lacinia faucibus.";

	echo sprintf($temlate, $heading, $bcol, $img, $text);
*/
 ?>