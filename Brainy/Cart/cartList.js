$('.arrow').click(function(){
  var slideIndex = $(this).closest('.arrow').index('.arrow');
  var aux = document.getElementsByClassName("product_resume")[slideIndex];
  var aux2 = document.getElementsByClassName("arrow")[slideIndex];
  if(aux.style.maxHeight == "45px"){
  	aux.style.maxHeight = "100%";
  	aux2.style.transform = "rotate(180deg)";
  }else{
  	aux.style.maxHeight = "45px";
  	aux2.style.transform = "rotate(0deg)";
  }
  
});