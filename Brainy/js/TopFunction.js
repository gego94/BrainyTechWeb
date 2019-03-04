

document.getElementById('topButton').onclick=function(){topFunction();};

// function for to top button

function topFunction()	
{
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
	document.getElementById("topButton").style.display="none";
}

