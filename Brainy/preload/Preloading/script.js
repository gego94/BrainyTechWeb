window.onload = function() {
	document.getElementById("loader-wrapper").style.display = "block";
	//da rimuovere il timeout
	setTimeout(function(){
		document.getElementsByTagName("body")[0].classList.add("loaded");
	}, 2000);
	
}