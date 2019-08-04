<?php
// The title of the page
$title = htmlspecialchars($post['title']);

// Local variables serialised
$postId = $post['idPost'];
$postCreationDate = $post['creation_date_fr'];
$postTitle = htmlspecialchars($post['title']);
$postContent = nl2br(htmlspecialchars($post['content']));
// $comment['idComment'] = $comment['idComment'];
// $comment['comment_date_fr'] = $comment['comment_date_fr'];
// htmlspecialchars($comment['author']) = htmlspecialchars($comment['author']);
// nl2br(htmlspecialchars($comment['comment'])) = nl2br(htmlspecialchars($comment['comment']));

// Form post urls
// "index.php?action=comment&amp;postId={$postId}&amp;commentId={$comment['idComment']}" = "index.php?action=comment&amp;postId={$postId}&amp;commentId={$comment['idComment']}";
$addcommentUrl = "index.php?action=addComment&amp;postId={$postId}";
?>

<?php ob_start(); ?>
<h1 class="title">Mon super blog</h1>

<div class="container">
    <p><a href="index.php">Retour à la liste des billets</a></p>
    
    <section class="billets">
        <h3 class="billet_title">
            <?= $postTitle ?>
            <em>le <?= $postCreationDate ?></em>
        </h3>
        
        <div class="billet_content">
            <p><?= $postContent ?></p>
        </div>
    </section>
        
    <section class="comments">
        <?php if ($comments->rowCount()): ?>
            <h2>Commentaires</h2>
        <?php endif; ?>
    <?php
  while ($comment = $comments->fetch()) {
    ?>
                <div class="comment">
                    <p><strong><?= htmlspecialchars($comment['author']) ?> </strong> 
                        le <span class="date"><?= $comment['comment_date_fr'] ?></span> (<a href="<?= "index.php?action=comment&amp;postId={$postId}&amp;commentId={$comment['idComment']}" ?>">modifier</a>)
                    </p>
                    <p class="comment_msg"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                </div>
            <?php
  }
  ?>
    </section>

        <h2>Ajouter un Commentaire</h2>        
        <form action="<?= $addcommentUrl ?>" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment" rows="5"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>
