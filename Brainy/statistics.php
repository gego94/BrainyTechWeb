<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
    	include_once 'functions.php';
    	getHead("Statistics");
    ?>
    <script src="https://www.gstatic.com/charts/loader.js"></script> <!-- geocharts -->
  </head>
  <body>
    <?php 
    	getMenu("Statistics");
    	getBreadcumbs("Statistics");
    ?>
    <div class="dark-theme" id="intro">
      <div class="content center container fade-in">
        <div class="col-10">
          <div class="col-10 title thin"><h1>Let the numbers speak</h1></div>
          <a <?php tabIndex(); ?> href="#numbers" class="button">Show me</a>
        </div>
      </div>
	</div>
    
    <div class="dark-theme wenge" id="numbers">
      <div class="content container center">

        <div class="title light col-10">We like numbers, especially <em>ours</em>. </div>

        <div class="col-10 v-offset-5 center">

          <div class="item col-2 col-sm-5">
            <i class="col-10 fas fa-umbrella"></i>
            <h1 class="counter"><?php getTotalUmbrellas()?></h1> 
            <p>Sold umbrellas.<br>High quality and <strong>elegant</strong> design.</p>
          </div> 

          <div class="item col-2 col-sm-5">
            <i class="col-10 fas fa-shipping-fast"></i>
            <h1 class="counter"><?php getWeekShips()?></h1>
            <p>Worldwide shipping every week.<br>One of those could be <strong>yours</strong>.</p>
          </div> 

          <div class="item col-2 col-sm-5">
            <i class="col-10 fas fa-tree"></i>
            <h1 class="counter" >0</h1> 
            <p>Cut down trees.<br>We love our <strong>lively</strong> nature.</p>
          </div>

          <div class="item col-2 col-sm-5">
            <i class="col-10 fas fa-users"></i>
			<h1 class="counter"><?php getTotalUsers()?></h1> 
            <p>People in our community.<br>Find out other <strong>umbrellars</strong> like you.</p>
          </div> 
          
          <div class="item col-2 col-sm-5">
            <i class="col-10 fas fa-handshake"></i>
            <h1 class="counter">11+</h1> 
            <p>Partners from all over the <strong>World</strong>.<br>Sharing and improving.</p>
          </div> 
         </div>
      </div> 
    </div>
    
    <div class="dark-theme">
      <div class="content center container" id="container">
        <div class="title col-10">
        	<h1 >Our Statistics Worldwide</h1>
        </div>      
        <div class="col-8 offset-1">
        	<h3>Point one country and you will now how many umbrellas had been sold there!</h3>
        </div>
        <div class="col-10" <?php tabIndex(); ?>  id="chart"></div>
      </div>
    </div>
    <?php $test = getPeopleByNationality();?>
    
    <!-- E' necessario che sia presente in questo punto e non in un file a parte perchè ho necessità di passare la variabile php
    generata dalla funzione qui sopra dentro al codice js qui sotto -->
    <script>    
    	var dati = <?php echo json_encode($test)?>;
        google.charts.load('current', {
              'packages':['geochart'],
              'mapsApiKey': 'AIzaSyCObg10MD9ZkcuUlak_DdW8zxKjMJhtPyA'
            });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() { 
		    
        var array = [];
        var columns = ['Country','Name&Details', 'Umbrellas'];
        array.push(columns);
        
        for(var i=0;i<dati.length;i++){ //tutti i valori di data
        	var single = [];	
        	for(var j=0;j<3;j++){ //per i tre valori di ogni data entry
            	
                if(j==2){
                	single.push(parseInt(dati[i][j]));
                }
                else
                	single.push(dati[i][j]);
            }
            array.push(single);
        }

        var data = google.visualization.arrayToDataTable(array);

        var options = {
          legend:'none',
          colorAxis: {colors: ['#b7e1f0','#1f7898']},
          backgroundColor: 'transparent',
          datalessRegionColor: '#ffffff',
          defaultColor: '#ffffff',
          showTooltip:true,
          showInfoWindow: true
        };

        var chart = new google.visualization.GeoChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
    </script>
    
    <?php getFooter("Statistics");?>
  </body>
</html>