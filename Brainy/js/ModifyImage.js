var inputs = document.querySelectorAll( '.inputFile' );
Array.prototype.forEach.call( inputs, function( input )
{
	input.addEventListener( 'change', function( e )
	{
    	if(this.files){
        	document.getElementById("imgText").innerHTML = e.target.value;
        }
    
    });
});