
  <h1>Rechercher des utilisateurs</h1>

  <form action='recherche_utilisateur.php' method='get'>
    <label for="prenom">Prenom</label><input type="text" name="prenom">
    <label for="nom">Nom</label><input type="text" name="nom">
    <input type="submit" name="rechercher" value="Rechercher">
  </form>

<?php
    //Constitution de la requete par défaut
    $sql = "SELECT * FROM uti_utilisateur";

    //Récupération des parametres de l'URL dans $_GET
    if ( isset($_GET['rechercher'])) {
      if ( $_GET['nom'] == "" && $_GET['prenom'] == "") {
        echo "Veuillez sasir une valeur dans le nom ou le prénom";
      }
      else {
        //Construction de la requete en fonction des différentes posiblités
        $nom = htmlspecialchars($_GET['nom']);
        $prenom = htmlspecialchars($_GET['prenom']);
        $sql = sprintf("SELECT * FROM uti_utilisateur WHERE uti_nom LIKE '%%%s%%' and uti_prenom LIKE '%%%s%%'",$nom, $prenom );
      }
    }

    //Connexion à la base de données et requete
    try
    {
      // On se connecte à MySQL
      $bdd = new PDO('mysql:host=127.0.0.1;dbname=annonces_immo;charset=utf8', 'root', 'admin');
    }
    catch(Exception $e)
    {
      // En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
    }
    $utilisateurs = $bdd->query($sql);

    // Création de la table en parcourant la requete
    $table = "<table>";
    $table .= "<tr><th>Id</th><th>Prenom</th><th>Nom</th><th>Age</th></tr>";
    while ($utilisateur = $utilisateurs->fetch())
    {
      $table .= "<tr>";
      $table .= "<td>" . $utilisateur['uti_oid'] . "</td>";
      $table .= "<td>" . $utilisateur['uti_prenom'] . "</td>";
      $table .= "<td>" . $utilisateur['uti_nom'] . "</td>";
      $table .= "<td>" . $utilisateur['uti_age'] . "</td>";
      $table .= "</tr>";
    }
    $table .= "</table>";

    echo $table;
  ?>
