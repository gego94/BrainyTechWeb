

function filter() {
	var input = document.getElementById("searchBox");
	var text = input.value.toUpperCase();
	var elements = document.getElementById("searchContainer");
	var a=elements.getElementsByTagName("p");
	for(i=0;i<a.length;i++ ){
		var tag=a[i].getElementsByTagName("a")[0];
		var contenuto=tag.innerHTML.toUpperCase();
		var el=document.getElementById("searchContainer").getElementsByTagName("p")[i].getElementsByTagName("a")[0];
		if (contenuto.includes(text)) {
			el.style.display = "block";
		} else {
			el.style.display = "none";
		}
	}
	var show=false;
	for(j=0;j<a.length;j++ ) {
		var el=document.getElementById("searchContainer").getElementsByTagName("p")[j].getElementsByTagName("a")[0];
		if(el.style.display==="block"){
			show=true;
			break;
		}
	}
	if(show==false){
		document.getElementById("searchNoResults").style.display="block";
	}
	else{
		document.getElementById("searchNoResults").style.display="none";
	}
}
