// JavaScript Document
function hamburgerShowHide() {
	// show/hide menu content
	var menu = document.getElementsByClassName('hamburger-menu')[0];
	if (menu.offsetHeight == 50) {
		menu.style.height = 50+(document.getElementsByClassName('menu-link').length)*40+"px";
		//transform hamburger button
		menu.getElementsByTagName('span')[0].style.transform = "rotate(45deg)";
		menu.getElementsByTagName('span')[1].style.opacity = "0";
		menu.getElementsByTagName('span')[2].style.transform = "rotate(-45deg)";
	}else{
		menu.style.height = 50+"px";
		//transform hamburger button
		menu.getElementsByTagName('span')[0].style.transform = "rotate(0deg)";
		menu.getElementsByTagName('span')[1].style.opacity = "1";
		menu.getElementsByTagName('span')[2].style.transform = "rotate(0deg)";
	}
}




function marginLogin()
{
	if(window.innerWidth>1200){
		var a=(window.innerWidth-1200)/2;
		document.getElementById('login').style.paddingLeft  =a+"px";;
		document.getElementById('login').style.paddingRight  =a+"px";
	}
}



// funzioni per adattare il testo in base alla larghezza
window.onresize = function() {a()};
window.onload = function() {b()};
var t=Array();
var p=document.getElementsByTagName("p");
function b()
{
		for(var i = 0; i < p.length; i++)
		{
			t.push(p[i].parentElement.clientWidth);
		}
}
function a()
{
	for(var i = 0; i < p.length; i++)
	{
		var el = p[i];
		var style=window.getComputedStyle(el).fontSize;
		var fontSize = parseFloat(style);
		var o = ((t[i]-p[i].parentElement.clientWidth)/t[i]);
		el.style.fontSize = fontSize*(1-o)  + 'px';
		t[i]=p[i].parentElement.clientWidth;
	}
}




window.onscroll = function() {scrollFunction()};
var last_scroll_position=window.scrollY;
function scrollFunction()
{
	var initial=document.getElementById('navMenu').clientHeight;
	if (window.scrollY>last_scroll_position)
	{
		document.getElementById('navMenu').style.top ="-"+initial+"px";
	}
	else
	{
		document.getElementById('navMenu').style.top ="0px";
	}
	last_scroll_position=window.scrollY;

	// per progress bar

	var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	var scrolled = (winScroll / height) * 100;
	document.getElementById("myBar").style.width = scrolled + "%";
}
