<h1>Articles</h1>
<table>
    <tr>
        <th>Titre</th>
        <th>Stock</th>
        <th>Prix</th>
    </tr>

    <!-- C'est ici que nous bouclons sur notre objet Query $articles pour afficher les informations de chaque article -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->nom, ['action' => 'view', $article->id]) ?>
        </td>

        <td>
            <?= $article->stock?>
        </td>

        <td>
            <?= $article->prix . "€" ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>