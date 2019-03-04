function dynamicPrice(product, category, last){
    if (product == "") {
        document.getElementById("price").value = "999";
        document.getElementById("price_label").innerHTML = document.getElementById("price").value + " $";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(category<=6 && category>=2){
                    //addons
                    if(product==1){
                      document.getElementById("price").value = parseInt(document.getElementById("price").value) + parseInt(this.responseText);
                    }else{
                      document.getElementById("price").value = parseInt(document.getElementById("price").value) - parseInt(this.responseText);
                    }
                  }else{
                    //colours and leathers
                    document.getElementById("price").value = parseInt(document.getElementById("price").value) + parseInt(this.responseText);
                  }
                  document.getElementById("price_label").innerHTML = document.getElementById("price").value + " $";
        	}
        };
        switch(category) {
        case 2:
          product2 = "bluetooth";
          break;
        case 3:
          product2 = "gps";
          break;
        case 4:
          product2 = "id";
          break;
        case 5:
          product2 = "ph";
          break;
        case 6:
          product2 = "solar_panel";
          break;
        default:
          product2 = product;
      }
        xmlhttp.open("GET", "getprice.php?p="+product2+"&c="+category+"&l="+last,true);
        xmlhttp.send();
    }
}