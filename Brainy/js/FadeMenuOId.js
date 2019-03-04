 
window.onload=setTimeout(function(){set();needToActive();closeOnStart()},1); 
window.onscroll = function() {scrollFunction();};
var last_scroll_position=window.scrollY;
var act=0;
var full=document.getElementById("full").style;
var opened=menuOpened();

// control if menu is open at the start and close it
function closeOnStart(){
	if(window.innerWidth<=768 && menuOpened()===true){
		show();
	}
}

// function for fading menu
function scrollFunction(){
	var top=document.getElementById("topButton").style;
	var x = document.getElementById("myTopNav");
	// control if scroll down or up
	if (window.scrollY>last_scroll_position){
		// if scroll down
		if(window.innerWidth>768){
			fullAppare();
		}
		else{
			fullDisappare();
		}
		// look if need to show to top button
		if(window.scrollY>50){
			top.display="block";
		}
		if(window.innerWidth<=768){
			x.style.top ="-"+5+"em";
			// if menu is opened need to close it
			if(menuOpened()===true){
				show();
			}
		}
		else{
			x.style.top ="-"+3.3+"em";
		}
	}
	else if(window.scrollY===0){
		// if i'm at the top
		fullDisappare();
		top.display="none";
		x.style.top ="0em";
	}
	else{
		// if scroll up
		if(window.innerWidth<=768){
			x.style.top =0;
			fullAppare();
		}
		else{
			x.style.top ="-3.3em";
		}
	}
	// new value for acual scroll
	last_scroll_position=window.scrollY;
}

// functions to make full bar behind menu appear and disappear
function fullAppare(){
	full.transition="delay 0.7s";
	full.transition="opacity 0s"; //2s
	full.opacity="1";
	//full.background="#051318";
}
function fullDisappare(){
	full.transition="delay 0s";
	full.transition="opacity 0s";
	full.opacity="0";
	full.background="trasparent";
}

// function to show or hide menu when on small devices
document.getElementById('hamburgerMenu').onclick=function(){show();};
function show(){
	var div=document.getElementsByClassName("menuDiv");
	var menu = document.getElementById('hamburgerMenu');
	var height=4;
	for(var i=0;i<div.length;i=i+1){	/*
    	if(div[i].style.display==="block"){
    			div[i].style.display = "none";
        }
        else{
    			div[i].style.display = "block";
        }*/
		var adiv=div[i].getElementsByTagName("a");
		for(var j=0;j<adiv.length;j=j+1){	
			// make all link appear
			if(adiv[j].style.visibility=="hidden" && adiv[j].id!=="basketImg" && adiv[j].id!=="logoImg"){			
				adiv[j].style.top=height+"em";	
                adiv[j].style.visibility="visible";	
				adiv[j].style.opacity="1";	
				menu.getElementsByTagName('span')[0].style.transform = "rotate(45deg)";
		  		menu.getElementsByTagName('span')[1].style.opacity = "0";
		  		menu.getElementsByTagName('span')[2].style.transform = "rotate(-45deg)";
				if(adiv[j].parentElement.classList.contains("dropdownContent")){
					adiv[j].style.top=0+"em";
				}
			}
			else{
				adiv[j].style.visibility="hidden";	
				adiv[j].style.opacity="0";
				menu.getElementsByTagName('span')[0].style.transform = "rotate(0deg)";
		  		menu.getElementsByTagName('span')[1].style.opacity = "1";
		  		menu.getElementsByTagName('span')[2].style.transform = "rotate(0deg)";	
			}
		}
		var dropCont=document.getElementsByClassName("dropdownContent");
		for(var jj=0;jj<dropCont.length;jj=jj+1){
			dropCont[jj].style.top=height+"em";
		}
	}
	if(div[0].style.display==="flex"){
		// menu was closed, need to show it correctly
        for(var j=0;j<div.length;j=j+1){
            div[j].style.display="block";
        }
	}else{
		// menu was opened, need to allow user to use the website correctly
		for(var k=0;k<div.length;k=k+1){
            div[k].style.display="flex";
        }
	}
}

// function needed to see what is the status of the window on start
function set(){
	if(window.innerWidth<=768){
		act=0;
	}
	else{
		act=1;
	}
}

// function to see if menu is if i need to ajust properties of item to adapt them for devices without javascript
window.onresize=function(){needToActive();};
function needToActive(){
	if(window.innerWidth<=768){
		if(act===0)	{
			JSActivation();
            show();
            act=1;
		}
	}
	else if(window.innerWidth>768){
		if(act===1){
			JSDisactivation();
            if(menuOpened()===false){
            	show();
            }
			act=0;
		}
	}
}

// add properties if javascript is enabled

function JSActivation(){
	document.getElementById("myTopNav").style.position="fixed";
	document.getElementById("basketImg").style.top=0.5+"em";
	document.getElementById("basketImg").style.right=0.5+"em";
	document.getElementById("logoImg").style.top=0.5+"em";
	document.getElementById("drop").style.top=0.5+"em";
	document.getElementById("sep").style.position="absolute";
	document.getElementById("sep").style.top=4+"em";
	document.getElementById("hamburgerMenu").style.top=0.5+"em";
	document.getElementById("hamburgerMenu").style.left=0.5+"em";

}

// reset properties when size>768 because we don't need to change them for devices without javascript
function JSDisactivation(){		
	var a=document.getElementById("myTopNav").getElementsByTagName("a");
	for(var i=0;i<a.length;i=i+1){
		a[i].style.top="0em";
		a[i].style.display="block";
		a[i].style.opacity="1";
		a[i].style.visibility="visible";
	}
    var b=document.getElementsByClassName("menuDiv");
    for(var j=0;j<b.length;j=j+1){
    	b[j].style.display="block";
    }
	document.getElementById("basketImg").style.right=0+"em";
	document.getElementById("logoImg").style.top=3.5+"em";
	document.getElementById("drop").style.top=3.5+"em";
	document.getElementById("sep").style.position="relative";
	document.getElementById("sep").style.top=0;
	document.getElementById("hamburgerMenu").style.top=0.5+"em";
	document.getElementById("hamburgerMenu").style.left=0.5+"em";
	
}

// funcction to see if menu is opened
function menuOpened(){
//alert(window.getComputedStyle(document.getElementById("full")).getPropertyValue("visibility"));
	if(document.getElementById("homeLink").style.visibility==="hidden"){
		return false;
	}
	else{
		return true;
	}
}


