<?php

if (isset($_GET["p"])) {

	$p = $_GET["p"];

} else {

	$p = "accueil";

}

ob_start();

if ($p === "formulaire1"){

	include("./pages/formulaire1.php");

} elseif ($p === "recherche_utilisateur"){

	include("./pages/recherche_utilisateur.php");

} elseif ($p === "ajout_utilisateur"){

	include("./pages/ajout_utilisateur.php");

} elseif ($p === "recherche"){

	include("./pages/recherche.php");

}

$content = ob_get_clean();
include("template/default.php");

?>