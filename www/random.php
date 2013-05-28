<html>
<head>
<link rel="stylesheet" href="jss/style.css" />
<link rel="shortcut icon" href="img/favicon.ico" />
<script src="jss/data.js"></script>
<script type="text/javascript">
function afficheGPS(){
	my_gps.init(storeAndAffiche);
}

function storeAndAffiche(position){
	my_gps._set(position);
	var texte=document.getElementById("montexte");
	var latlon=my_gps.getlatitude()+","+my_gps.getlongitude();
    var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
	  +latlon+"&zoom=14&size=400x300&sensor=false";
	 texte.innerHTML="Carte correspondant &agrave; la position (" + latlon + ")<br/><img src='"+img_url+"'>";
	
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
<div id="aucentre">
<p id="montexte">Tout le blabla du monde..................................................................</p>
<input type="button" onclick="afficheGPS()" id="btnGo" value="monbouton"/>
</div>
</body>
</html>