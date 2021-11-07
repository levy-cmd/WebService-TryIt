 <!-- Main Content -->
 <ul class="nav navbar-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catégories</a>
      <ul class="dropdown-menu">
            <li><a href="index.php">Tout <span class="glyphicon glyphicon-globe pull-right"></span></a></li>
            <li class="divider"></li>
            <?php foreach ($categories as $categorie): ?>
              <li><a href="index.php?action=categorie&id=<?= $categorie->id ?>"><?= $categorie->libelle ?></a></li>
              <li class="divider"></li>
              <?php endforeach ?>
             
      </ul>
    </li>
  </ul>