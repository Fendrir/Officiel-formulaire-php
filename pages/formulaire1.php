<p>
    <?php
      /*if ( !isset($_GET['prenom'])) {
        echo "Formulaire non soumis";
      } else {
        if ( $_GET['prenom'] == '') {
          echo "Formulaire soumis avec champ vide ou erreur";
        } else {
          echo "Formulaire soumis avec valeur valides";
        }
      }*/

      if ( !isset($_POST['prenom'])) {
        echo "Formulaire non soumis";
      } elseif ( $_POST['prenom'] == '' ) {
          echo "Formulaire soumis avec champ vide ou erreur";
      } else {
          echo "Formulaire soumis avec valeur valides prenom = ". htmlspecialchars($_POST['prenom']);

          $sql = sprintf("select uti_oid, uti_name, uti_password from uti_utilisateur where uti_password = '%s' and uti_oid = %d", htmlspecialchars($_POST['prenom']), 4 );

          /*echo "<br><br>";
          $sql = "select uti_oid, uti_name, uti_password from uti_utilisateur where uti_password = " . $_POST['prenom'] ;
          echo $sql;*/
      }
    ?>
  </p>

  <form method='post'>
    <input type="text" name="prenom">
    <input type="submit" value="Validez">
  </form>
