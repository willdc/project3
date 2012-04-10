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
</head>
    
	<body onload="initialize()">
    
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<h1>FOOD ROULETTE</h1>
			</div>
			<div data-role="content" data-theme="a">
				<?
				
					$action = $_GET['query'];
					print '<p>';
					if(!$action){
						print 'The search term isnt available';
					}
					else {
						print 'hey '.$action.' what';
					}
					print '</p>';
				
				?>
				
			</div>
			<div data-role="footer" data-position="inline">
				<h1>Footer</h1>
			</div>
		</div>
	</body>
</html>

