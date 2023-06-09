 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display a map on a webpage</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
<style>
/* body { margin: 0; padding: 0; }
#map { position: absolute; top: 10; bottom: 20; width: 50%; } */
</style>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
	<div class="map-container flex flex-center">
		<div class="w-32 h-32 " id="map"></div>

	</div>
</body>
</html> 