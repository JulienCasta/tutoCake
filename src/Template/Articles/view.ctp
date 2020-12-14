<h1><?= h($article->nom) ?></h1>
<p><?= h($article->description) ?></p>
<p><small>Prix : <?= $article->prix . "€"?></small></p>
<p><?= $this->Html->link('Modifier', ['action' => 'edit', $article->id]) ?></p>
<?php foreach ($catégories as $catégorie) {?>
<p> <?= $catégorie['nom'];?></p>
<?php }?>