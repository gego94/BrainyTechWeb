
window.onload = function() {active();};


// function to disable links in acvtive classes
 var text="You are in : ";
 window.onload=function(){setActiveClass();}
function setActiveClass()
{
	var a = document.getElementsByTagName('a');
	var done=false;
	for(var i=0;i<a.length;i=i+1)
	{
		if(document.URL.toLowerCase().includes(a[i].getAttribute('href').toLowerCase()))
		{
			if(!done)
			{
				if(a[i].parentElement.className.includes("dropdownContent"))
				{
					text = text + a[i].parentElement.parentElement.children[0].innerHTML + " > ";
				}
				text = text + a[i].innerHTML;
				done=true;
			}
			a[i].href='#';
		}
	}
	var text2 = text.replace(" ⌄", "");
	document.getElementById("breadcumb").innerHTML = text2;
	
}