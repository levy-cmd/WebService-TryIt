<?php
require_once 'inclusion/entete.php';
require_once 'inclusion/menu.php';
?>
<aside style="float: right">
  <div>
    <div>
      <a id="" href="http://kiosque.lefigaro.fr/le-figaro" target="_blank" style="color:#333;text-decoration:none;">
      <img class="fh-cover__img" src="http://static.milibris.com/thumbnail/issue/fe024873-1802-43cd-8f16-6a69fa9bb417/front/catalog-cover-large.png" alt="Lire Le Figaro en PDF en ligne" title="Lire Le Figaro en PDF en ligne" width="170" height="165">
      </a>
      <p>Lire le Journal du 06 Novembre 2021</p>
    </div>
    <br>
    <div>
      <a id="" href="http://kiosque.lefigaro.fr/le-figaro" target="_blank" style="color:#333;text-decoration:none;">
      <img class="fh-cover__img" src="https://www.creads.com/wp-content/uploads/2021/05/nouveau_journal_figaro.jpg" alt="Lire Le Figaro en PDF en ligne" title="Lire Le Figaro en PDF en ligne" width="170" height="165">
      </a>
      <p>Lire le Journal du 26 Novembre 2021</p>
    </div>
    <br>
    <div>
      <a id="" href="http://kiosque.lefigaro.fr/le-figaro" target="_blank" style="color:#333;text-decoration:none;">
      <img class="fh-cover__img" src="https://upload.wikimedia.org/wikipedia/commons/5/59/Figaro_4_aout_1914.jpg" alt="Lire Le Figaro en PDF en ligne" title="Lire Le Figaro en PDF en ligne" width="170" height="165">
      </a>
      <p>Lire le Journal du 16 Novembre 2021</p>
    </div>
  </div>
</aside>

<div class="container" id="contenu">
  <div class="row">
    <?php if (!empty($articles)) : ?>
      <?php foreach ($articles as $article) : ?>
        <div class="col-lg-8 col-md-10 mx-auto">
          <h1><a href="index.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a></h1>
          <p><?= substr($article->contenu, 0, 300) . '...' ?></p>
        </div>
      <?php endforeach ?>
    <?php else : ?>
      <div class="message">Aucun article trouvé</div>
    <?php endif ?>
  </div>
</div>

<?php require_once 'inclusion/bas.php';
?>