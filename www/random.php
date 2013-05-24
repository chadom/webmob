<html>
<head>
<link rel="stylesheet" href="jss/style.css" />
<link rel="shortcut icon" href="img/favicon.ico" />
<script src="jss/data.js"></script>
<script type="text/javascript">
function afficheGPS(){
	my_gps.init();
	var position=my_gps.get();
	var texte=document.getElementById("montexte");
	texte.innerHTML= "Latitude=" + position.coords.latitude + "<br/>" + "Longitude=" + position.coords.longitude;
}
</script>
<title>Al&eacute;atoire </title>
</head>
<body>
<div class="wrapper">
		<br class="clear" />
<div class="titre" id="header">
	<h1>Al&eacute;atoire</h1>
</div>
</div>
<p id="montexte">Tout le blabla du monde..................................................................</p>
</body>
</html>