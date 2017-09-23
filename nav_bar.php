<nav class="navbar navbar-inverse bg-faded">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mon super site</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="?p=formulaire1">Formulaire 1</a></li>
      <li><a href="?p=recherche_utilisateur">Recherche Utilisateur</a></li>
      <li><a href="?p=ajout_utilisateur">Ajout Utilisateur</a></li>
    </ul>
    <form class="navbar-form navbar-left" method="GET" action="pages/recherche.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="recherche_nav">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>