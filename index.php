<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>FOOD ROULETTE</title>
		<link rel="stylesheet" href="themes/foodtheme.min.css" />
        <link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile.structure-1.0.1.min.css" />
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDmaXFi4K_rvX4GZxyB5X01xTLdu7jTwrQ&sensor=false">
    	</script>
    	<script type="text/javascript">
      	function initialize() {
			var myLatlng = new google.maps.LatLng(28.600479,-81.2013);
		
			var myOptions = {
			  center: myLatlng,
			  zoom: 8,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			
			var map = new google.maps.Map(document.getElementById("map_canvas"),
				myOptions);
				
				var marker = new google.maps.Marker({
					 position: myLatlng,
						title:"Hello World!"					
				});
				
			marker.setMap(map); 
		 }
		 
		 /*var url ="https://maps.googleapis.com/maps/api/place/search/xml?";
		 url+=key;
		 
		 $('xhr').ajax({
                      url: "https://maps.googleapis.com/maps/api/place/search/xml?",
                      context: document.body
                    }).done(function() { 
                      $(this).addClass("done");
                    });
		 */
		</script>
        
	</head>
    
	<body onload="initialize()">
    
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>FOOD ROULETTE</h1>
			</div>
			<div data-role="content" data-theme="a">
				<p></p>
                <form action="maps.php" method="get">
                	<input type="search" name="query" placeholder="Freak'n Search" /><!--data-ajax="false"-->
                 </form>
                <div id="map_canvas" style="width:300px; height:200px"></div>
				<p><img src="images/burger.jpg" /> </p>
				<p>CHOOSE A TYPE OF RESTAURANT TO FREAKIN EAT AT YO</p>
				<p><a href="index.html" data-role="button" data-inline="false" data-mini="true" data-icon="arrow-r" data-iconpos="right" >TELL ME WHERE TO EAT</a></p>
				
			</div>
			<div data-role="footer" data-position="inline">
				<h1>Footer</h1>
			</div>
		</div>
	</body>
</html>