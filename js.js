selTitle = 1;
menuInf = false;
function nav(site){
	var l = window.location;
	console.log(l);
	if(l.href.includes("lang=de")){
		if(site=="/")
			l.href = l.origin + "?lang=de";
		else 
			l.href = l.origin + "?lang=de&site=" + site;
	}else
		if(site=="/")
			l.href = l.origin;
		else
			l.href = l.origin + "?site=" + site;
	return false;
}
function langChange(){
	console.log("change lang");
	var h = window.location.href;
	if(h.includes("lang=de&"))
		h = h.replace("lang=de&","");
	else if (h.includes("&lang=de"))
		h = h.replace("&lang=de","");
	else if (h.includes("?lang=de"))
		h = h.replace("?lang=de","");
	else if(h.includes("site=")){
		var i = h.indexOf("site=");
		var j = h.indexOf("&");
		if(j == -1)
			j = h.length;
		h = window.location.origin + "?lang=de&" + h.substr(i, j);
	}
	else
		h = window.location.origin + "?lang=de";
	window.location.href = h;
}	

function left(){
	ebi("titleImg" + (selTitle + 1) % 3).style.opacity = 1;
	ebi("titleImg" + (selTitle + 2) % 3).style.opacity = 0;

	ebi("titleImg" + selTitle).classList.add("titleLeft");
	ebi("titleImg" + (selTitle + 1) % 3).classList.remove("titleRight");
	ebi("titleImg" + (selTitle + 2) % 3).classList.remove("titleLeft");
	ebi("titleImg" + (selTitle + 2) % 3).classList.add("titleRight");
	setSel((selTitle + 1) % 3);
	selTitle = (selTitle + 1) % 3;

}

function right(){
	ebi("titleImg" + (selTitle + 1) % 3).style.opacity = 0;
	ebi("titleImg" + (selTitle + 2) % 3).style.opacity = 1;

	ebi("titleImg" + selTitle).classList.add("titleRight");
	ebi("titleImg" + (selTitle + 1) % 3).classList.remove("titleRight");
	ebi("titleImg" + (selTitle + 1) % 3).classList.add("titleLeft");
	ebi("titleImg" + (selTitle + 2) % 3).classList.remove("titleLeft");
	setSel((selTitle + 2) % 3);
	selTitle = (selTitle + 2) % 3;
}
function menuInflate(){
	if(menuInf){
		ebi("menuButton").classList.remove("active");
		ebi("menu").classList.remove("active");
	}else{
		ebi("menuButton").classList.add("active");
		ebi("menu").classList.add("active");
	}
	menuInf = !menuInf;
}

function setSel(newT){
	ebi("ind" + selTitle).classList.remove("current");
	ebi("ind" + newT).classList.add("current");
}

function ebi(name){
	return document.getElementById(name);
}