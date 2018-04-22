<script type="text/javascript"> 
document.getElementById("a1").classList.remove("selA");
document.getElementById("a2").classList.remove("selA");
document.getElementById("a3").classList.add("selA");
document.getElementById("a4").classList.remove("selA");
document.getElementById("a5").classList.remove("selA");

function profileClick(member) {
	document.getElementById(member).getElementsByClassName('profilepic')[0].style.opacity = "0";
	document.getElementById(member).getElementsByClassName('name')[0].style.marginTop = "-200px";
	document.getElementById(member).getElementsByClassName('description')[0].style.display = "block";
	document.getElementById(member).getElementsByClassName('down')[0].style.marginTop = "1px";
	document.getElementById(member).getElementsByClassName('down')[0].style.transform = "rotate(180deg)";
	document.getElementById(member).getElementsByClassName('down')[0].onclick = function(){ profileClickClose(member); };
	console.log(document.getElementById(member).getElementsByClassName('down')[0].onclick);
	document.getElementById(member).style.display = "block";
	document.getElementById(member).style.width = "95%";
	document.getElementById(member).style.margin = "auto";
	document.getElementById(member).style.marginTop = "30px";
	document.getElementById(member).style.marginBottom = "30px";
}

function profileClickClose(member) {
	document.getElementById(member).getElementsByClassName('profilepic')[0].style.opacity = "100";
	document.getElementById(member).getElementsByClassName('name')[0].style.marginTop = "10px";
	document.getElementById(member).getElementsByClassName('description')[0].style.display = "none";
	document.getElementById(member).getElementsByClassName('down')[0].style.marginTop = "24px";
	document.getElementById(member).getElementsByClassName('down')[0].style.transform = "rotate(0deg)";
	document.getElementById(member).getElementsByClassName('down')[0].onclick = function(){ profileClick(member); };
	document.getElementById(member).style.display = "inline-block";
	document.getElementById(member).style.width = "250px";
	document.getElementById(member).style.margin = "10px";
}
</script>
<link rel="stylesheet" type="text/css" href="sites/team.css">

<div id="wrapper">
	<div class="member" id="mem1">
		<img class="profilepic" src="img/jan.jpg">
		<div class="name">Jan Müller</div>
		<div class="role">Technical Advisor</div>
		<div class="description">Hello there</div>
		<div class="down" onclick="profileClick('mem1')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="member" id="mem2">
		<img class="profilepic" src="img/flo.jpg">
		<div class="name">Florian Jüngermann</div>
		<div class="role">Control Systems Engineer</div>
		<div class="description">I am currently mainly working on the Attitude Determination and Control System. There I have implemented a physics simulation. Now, I am testing several approaches for the control system. Moreover, I also administrate the website and the Instagram and Facebook accounts.</div>
		<div class="down" onclick="profileClick('mem2')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="member" id="mem3">
		<img class="profilepic" src="img/max1.jpg">
		<div class="name">Max Schild</div>
		<div class="role">Data Processing</div>
		<div class="description">Hello there</div>
		<div class="down" onclick="profileClick('mem3')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="member" id="mem4">
		<img class="profilepic" src="img/alex.jpg">
		<div class="name">Alexander Geisbüsch</div>
		<div class="role">CAD Construction</div>
		<div class="description">Hello there</div>
		<div class="down" onclick="profileClick('mem4')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="member" id="mem5">
		<img class="profilepic" src="img/maxlacht.jpg">
		<div class="name">Max von Wolff</div>
		<div class="role">Control Systems Engineer</div>
		<div class="description">Besides a variety of other technical aspects, my field of interest lies in the Attitude Determination And Control System and also the core computational unit representing the cubesat's brain. I try my best to make sure that all subsystems work together as a whole and the </div>
		<div class="down" onclick="profileClick('mem5')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>	
	<div class="member" id="mem6">
		<img class="profilepic" src="img/member1.jpg">
		<div class="name">Christopher Fritz</div>
		<div class="role">Data Transmission</div>
		<div class="description">Hello there</div>
		<div class="down" onclick="profileClick('mem6')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="member" id="mem7">
		<img class="profilepic" src="img/member1.jpg">
		<div class="name">Jonathan Fritz</div>
		<div class="role">Power Supply Chain</div>
		<div class="description">Hello there</div>
		<div class="down" onclick="profileClick('mem7')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="member" id="mem8">
		<img class="profilepic" src="img/member1.jpg">
		<div class="name">Nathanael Ediger</div>
		<div class="role">Trajectory Calculation</div>
		<div class="description">Hello there</div>
		<div class="down" onclick="profileClick('mem8')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="member" id="mem9">
		<img class="profilepic" src="img/member1.jpg">
		<div class="name">Thomas Leister</div>
		<div class="role">Communication Systems</div>
		<div class="description">Hello there</div>
		<div class="down" onclick="profileClick('mem9')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="member" id="mem10">
		<img class="profilepic" src="img/member1.jpg">
		<div class="name">Michael Sexauer</div>
		<div class="role">Mentor</div>
		<div class="description">Hello there</div>
		<div class="down" onclick="profileClick('mem10')"><img class="dropdown" src="img/dropdown.png" height="30"></div>
	</div>
	<div class="clear"></div>
</div>