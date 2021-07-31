<?php

use App\Table\Categorie;
use App\Table\Article;
use App\App;

$categorie = Categorie::find($_GET['id']);
if ($categorie === false) {
    App::notFound();
}
$articles = Article::LastByCategory($categorie->id);
$categories = Categorie::all();

?>
<h1><?= $categorie->titre ?></h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach ($articles as $post) : ?>
            <h2>
                <a href="<?= $post->url; ?>"><?= $post->titre; ?></a>
            </h2>
            <p><em><?= $post->category; ?></em></p>

            <?= $post->extrait; ?>

        <?php endforeach ?>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach ($categories as $categorie) : ?>
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</div>