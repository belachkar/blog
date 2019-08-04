<?php
// The title of the page
$title = 'Mon Blog';

// Form post urls
$addPostUrl = "index.php?action=addPost";
?>

<?php ob_start(); ?>

<h1 class="title">Mon super blog</h1>

<div class="container">
    <h3>Derniers billets du blog</h3>
    <section class="billets">
        <?php
  while ($data = $posts->fetch()) {
    ?>
            <div class="billet">
                <h3 class="billet_title">
                    <?= htmlspecialchars($data['title']) ?>
                    <span class="date"><em>le <?= $data['creation_date_fr'] ?></em></span>
                </h3>
                
                <div class="billet_content">
                    <p><?= nl2br(htmlspecialchars($data['content'])) ?></p>
                    <p><em><a href="index.php?action=post&amp;postId=<?= $data['idPost'] ?>">Commentaires</a></em></p>
                </div>
            </div>
        <?php
  }
  $posts->closeCursor();
  ?>
    </section>
    
    <section>
        <h2>Ajouter un article</h2>
        
        <form action="<?= $addPostUrl ?>" method="post">
            <div>
                <label for="title">Titre</label><br />
                <input type="text" id="title" name="title" />
            </div>
            <div>
                <label for="content">Article</label><br />
                <textarea id="content" name="content" rows="5"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>
    </section>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>
