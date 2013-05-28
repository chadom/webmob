<html>
<head>
<link rel="stylesheet" href="jss/style.css" />
<link rel="shortcut icon" href="img/favicon.ico" />
<script src="jss/data.js"></script>
<title>Recherche dans la librairie Aplon</title>
<script type="text/javascript">

function stocker(){
	my_data.Set('auteur',document.getElementById('auteur').value);
	my_data.Set('nationalite',document.getElementById('nationalite').value);
	my_data.Set('titre',document.getElementById('titre').value);
	my_data.Set('annee',document.getElementById('annee').value);
	my_data.Set('prix',document.getElementById('prix').value);
}

</script>
</head>
<body class="search">
	<div class="wrapper">
		<br class="clear" />
		<div class="titre" id="header">
			<h1>Votre recherche</h1>
		</div>
	</div>
	<div class="wrapper" id="aucentre">
	<form target="_self" method="get">
		<!-- Auteur, Nationalité, Titre, Année, Prix, Disponibilité -->
		<label for="auteur">Auteur :</label><input type="text" name="auteur"
			id="auteur" onchange="stocker()"/><br class="clear"/> <label for="nationalite">Nationalit&eacute; : </label><input
			list="liste_pays" name="nationalite" id="nationalite" onchange="stocker()"/><br class="clear"/>
		<datalist id="liste_pays">
			<option value="France">
			<option value="Pays-Bas">
			<option value="Espagne">
		</datalist>
		<label for="titre">Titre : </label><input type="text" name="titre"
			id="titre" onchange="stocker()"/><br class="clear"/> <label for="annee">Ann&eacute;e : </label>1900<input
			type="range" id="annee" name="annee" min="1900" max="2012" onchange="stocker()"/> 2012<br class="clear"/>
		<label for="prix">Prix : </label><input type="text" name="prix"
			id="prix" onchange="stocker()"/><br class="clear"/> <label for="disponibilite">Disponibilit&eacute; :
		</label><input type="text" name="disponibilite" id="disponibilite" onchange="stocker()"/><br class="clear" />
		<input type="submit" value="Rechercher" />
		<input type="button" value="Re-initialiser" onclick="my_data.Clear()" />
	</form>
	</div>
</body>
</html>
