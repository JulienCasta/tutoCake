<h1><?= h($article->nom) ?></h1>
<p><?= h($article->description) ?></p>
<p><small>Prix : <?= $article->prix . "€"?></small></p>
<?php foreach ($catégories as $catégorie) {?>
<p> <?= $catégorie['nom'];?></p>
<?php }?>