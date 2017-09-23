<?php

$recherche =$_GET["recherche_nav"];

try {

	$bdd = new

	PDO('mysql:host=127.0.0.1;dbname=annonces_immo;charset=utf8', 'root', 'admin');


}
catch (Exception $e){

	die("erreur :". $e->getMessage());

}

$sql = sprintf("SELECT * FROM uti_utilisateur WHERE uti_prenom LIKE '%%%s%%' OR uti_nom LIKE '%%%s%%' OR uti_pseudo LIKE '%%%s%%'",$recherche,$recherche,$recherche);

$users = $bdd->query($sql);
	?>



	<h1>Le résultat de votre recherche</h1>

	<?php 
		while ($data = $users->fetch()){
	?>



	<p><strong>Utilisateurs</strong> : <?= $data['uti_prenom']." ". $data['uti_nom'] . " avec pour pseudo : " . $data['uti_pseudo']?></p>
	<br />

	<?php 
} 

$users->closeCursor();
?>