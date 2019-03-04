function selectColour(c) {
	var elements = document.getElementsByClassName('colourSelected');
	while(elements.length > 0){
		elements[0].classList.remove('colourSelected');
	}
	var element = null;
	var res = null;
	var restop = null;

	switch(c){
		case 'P':
		element = document.getElementById("PureBlack");
		res = "black";
		restop = "blacktop";
		break;
	case 'O':
		element = document.getElementById("ObsidianBlue");
		res = "blue";
		restop = "bluetop";
		break;
	case 'I':
		element = document.getElementById("IndigoBlue");
		res = "lightBlue";
		restop = "lightBluetop";
		break;
	case 'A':
		element = document.getElementById("AmberYellow");
		res = "yellow";
		restop = "yellowtop";
		break;
	case 'E':
		element = document.getElementById("EmeraldGreen");
		res = "green";
		restop = "greentop";
		break;
	case 'L':
		element = document.getElementById("LavaRed");
		res = "red";
		restop = "redtop";
		break;
	}
	document.getElementById("firstBg").style.background = "url('Personalize/img/"+res+"2.jpg')";
	document.getElementById("secondBg").style.background = "url('Personalize/img/"+restop+"2.jpg')";
	element.classList.add("colourSelected");
}

function selectColourHandle(c) {
	var elements = document.getElementsByClassName('colourSelectedHandle');
	while(elements.length > 0){
		elements[0].classList.remove('colourSelectedHandle');
	}
	var slider =  document.getElementById("slider1");
	var element = null;
	var str = slider.getElementsByTagName("li")[0].style.background; 
	var res = null;
	var restop = null;
	switch(c){
		case 'C':
			element = document.getElementById("GreyHandle");
			res = str.replace("1", "2");
			restop = str.replace("1", "top");
		break;
		case 'M':
			element = document.getElementById("BrownHandle");
			res = str.replace("2", "1");
			restop = str.replace("2", "top");
		break;
	}
	slider.getElementsByTagName("li")[0].style.background = res;
	slider.getElementsByTagName("li")[1].style.background = restop;
	element.classList.add("colourSelectedHandle");
}