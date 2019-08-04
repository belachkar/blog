<?php
// The title of the page
$title = htmlspecialchars($post['title']) . ' - <em>Modification de commentaire</em>';

// Local variables serialised
$postId = $post['idPost'];
$postCreationDate = $post['creation_date_fr'];
$postTitle = htmlspecialchars($post['title']);
$postContent = nl2br(htmlspecialchars($post['content']));
$commentId = $comment['idComment'];
$commentDateCreation = $comment['comment_date_fr'];
$commentAuthor = htmlspecialchars($comment['author']);
$commentComment = htmlspecialchars($comment['comment']);

// Form post urls
$editCommentUrl = "index.php?action=editComment&amp;commentId={$commentId}&amp;postId={$postId}";
?>

<?php ob_start(); ?>
<h1 class="title">Mon super blog</h1>

<div class="container">
  <section class="billets">
      <h3 class="billet_title">
          <?= $postTitle ?>
          <em>le <?= $postCreationDate ?></em>
      </h3>
      
      <div class="billet_content">
          <p><?= $postContent ?></p>
      </div>
  </section>
  
  <section>
    <h2>Commentaire du <span class="date"><em><?= $commentDateCreation ?></em></span></h2>
    
    <form action="<?= $editCommentUrl ?>" method="post">
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" value="<?= $commentAuthor ?>"/>
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment" rows="5"><?= $commentComment ?></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>
  </section>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>
