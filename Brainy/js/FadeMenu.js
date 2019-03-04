window.onload = function() {close();};
window.onscroll = function() {scrollFunction();};
var last_scroll_position=window.scrollY;

function menuOpened(){
	if(document.getElementById("homeLink").style.visibility==="hidden")
		return false;
	return true;
}

// function for fading menu
function scrollFunction(){
	var top=document.getElementById("topButton").style;
	var x = document.getElementById("myTopNav");
	var sep=document.getElementById("sep");
	// control if scroll down or up
	if (window.scrollY>last_scroll_position){
		// if scroll down
		// look if need to show to top button
		if(window.scrollY>50){
			top.display="block";
		}
		if(window.innerWidth<=768){
			x.style.top ="-"+5+"em";
			sep.style.top="-"+3.7+"em";
			if(menuOpened())
			{
				show();
			}
		}
		else{
			x.style.top ="-"+3.3+"em";
			sep.style.top=3.3+"em";
		}
	}
	else if(window.scrollY===0){
		// if i'm at the top
		top.display="none";
		x.style.top ="0em";
		sep.style.top=3.7+"em";
	}
	else{
		// if scroll up
		if(window.innerWidth<=768){
			x.style.top =0+"em";
			sep.style.top=3.7+"em";
		}
		else{
			x.style.top ="-3.3em";
			sep.style.top=3.3+"em";
		}
	}
	// new value for acual scroll
	last_scroll_position=window.scrollY;
}

// function to show or hide menu when on small devices
document.getElementById('hamburgerMenu').onclick=function(){show();};
function show()
{
	if(menuOpened()){
		makeInVisible();
	}
	else{
		makeVisible();
	}
}

function makeVisible(){

	var menu = document.getElementById('hamburgerMenu');
	menu.getElementsByTagName('span')[0].style.transform = "rotate(45deg)";
	menu.getElementsByTagName('span')[1].style.opacity = "0";
	menu.getElementsByTagName('span')[2].style.transform = "rotate(-45deg)";
	var div=document.getElementsByClassName("menuDiv");
	div[0].style.height="auto";
	div[1].style.height="auto";
	for(var i=0;i<div.length;i=i+1)
	{
		var adiv=div[i].getElementsByTagName("a");
		for(var j=0;j<adiv.length;j=j+1){
				adiv[j].style.visibility="visible";
				adiv[j].style.opacity="1";
            	adiv[j].style.display = "block";
		}
	}
    
    var dropdown = document.getElementsByClassName("dropdown");
    for(var k=0;k<dropdown.length;k=k+1) {
    	dropdown[k].style.display = "block";
    }
}

function makeInVisible(){
	var menu = document.getElementById('hamburgerMenu');
	menu.getElementsByTagName('span')[0].style.transform = "rotate(0deg)";
	menu.getElementsByTagName('span')[1].style.opacity = "1";
	menu.getElementsByTagName('span')[2].style.transform = "rotate(0deg)";
	var div=document.getElementsByClassName("menuDiv");
	for(var i=0;i<div.length;i=i+1)
	{
		var adiv=div[i].getElementsByTagName("a");
		for(var j=0;j<adiv.length;j=j+1){
			adiv[j].style.visibility="hidden";
			adiv[j].style.opacity="0";       
		}
	}
    var dropdown = document.getElementsByClassName("dropdown");
    for(var k=0;k<dropdown.length;k=k+1) {
    	dropdown[k].style.display = "none";
    }
	div[0].style.height="1.85em";
	div[1].style.height="1.85em";
}

window.onresize = function() {close();};
function close(){
	if(window.innerWidth>=768 && menuOpened()===false){
		show();
	}
	if(window.innerWidth<768 && menuOpened()===true){
		show();
	}
    if(window.innerWidth>=768 && document.getElementById("myTopNav").style.top=="-5em"){
		document.getElementById("myTopNav").style.top="-3.3em";
	}
    if(window.innerWidth<768 && document.getElementById("myTopNav").style.top=="-3.3em"){
		document.getElementById("myTopNav").style.top="-3.8em";
        document.getElementById("sep").style.top="-0.2em";
	}
}