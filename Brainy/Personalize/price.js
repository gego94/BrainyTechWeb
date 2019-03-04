function dynamicPrice(product, category){
    if (product == "") {
        document.getElementById("price").value = "999";
        document.getElementById("price_label").innerHTML = document.getElementById("price").value + " $";
        return;
    } else { 
    	var str = "p="+product+"&c="+category";
        alert(str);
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("price").value = this.responseText;
                alert(this.responseText);
                document.getElementById("price_label").innerHTML = document.getElementById("price").value + " $";
        	}
        };
        xmlhttp.open("GET","../getprice.php?"+encodeURIComponent(str),true);
        xmlhttp.send();
    }
}