<?php
require 'controller/frontend.php';

try {
  // Hydrate inputs
  $action = isset($_GET['action']) ? $_GET['action'] : null;
  $postId = isset($_GET['postId']) && $_GET['postId'] > 0 ? $_GET['postId'] : null;
  $commentId = isset($_GET['commentId']) && $_GET['commentId'] > 0 ? $_GET['commentId'] : null;
  $title = isset($_POST['title']) ? trim($_POST['title']) : null;
  $content = isset($_POST['content']) ? trim($_POST['content']) : null;
  $author = isset($_POST['author']) ? trim($_POST['author']) : null;
  $comment = isset($_POST['comment']) ? trim($_POST['comment']) : null;

  switch ($action) {
  case 'listPosts':
  listPosts();
  break;

  case 'post':
  if ($postId) {
    post($postId);
  } else {
    throw new Exception('Aucun identifiant de billet envoyé !');
  }
  break;

  case 'addPost':
  if ($title && $content) {
    addPost($title, $content);
  } else {
    throw new Exception('Tous les champs ne sont pas remplis !');
  }
  break;

  case 'comment':
  if ($postId && $commentId) {
    comment($postId, $commentId);
  } else {
    throw new Exception('Identifiant ( billet ou commentaire ) non envoyé !');
  }
  break;

  case 'editComment':
  if ($postId && $commentId) {
    if ($author && $comment) {
      editComment($postId, $commentId, $author, $comment);
    } else {
      throw new Exception('Tous les champs ne sont pas remplis !');
    }
  } else {
    throw new Exception('Identifiant ( billet ou commentaire ) non envoyé !');
  }
  break;

  case 'addComment':
  if ($postId) {
    if ($author && $comment) {
      addComment($postId, $author, $comment);
    } else {
      throw new Exception('Tous les champs ne sont pas remplis !');
    }
  } else {
    throw new Exception('Aucun identifiant de billet envoyé !');
  }
  break;

  default:
  listPosts();
  break;
  }
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}
