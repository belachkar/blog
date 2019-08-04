<?php

require_once 'model/PostManager.php';
require_once 'model/CommentManager.php';

// Chargement des classes
use Belachkar\Blog\Model\PostManager;
use Belachkar\Blog\Model\CommentManager;

function listPosts() {
  $postManager = new PostManager();
  $posts = $postManager->getPosts();

  require 'view/frontend/listPostsView.php';
}

function post($postId) {
  $postManager = new PostManager();
  $commentManager = new CommentManager();

  $post = $postManager->getPost($postId);
  $comments = $commentManager->getComments($postId);

  require 'view/frontend/postView.php';
}

function comment($postId, $commentId) {
  $postManager = new PostManager();
  $commentManager = new CommentManager();

  $post = $postManager->getPost($postId);
  $comment = $commentManager->getComment($commentId);

  require 'view/frontend/commentView.php';
}

function addPost($author, $comment) {
  $postManager = new PostManager();

  $affectedLines = $postManager->addPost($author, $comment);

  if ($affectedLines !== false) {
    header('Location: index.php?action=listPosts');
  } else {
    throw new Exception('Impossible d\'ajouter le post !');
  }
}

function addComment($postId, $author, $comment) {
  $commentManager = new CommentManager();

  $affectedLines = $commentManager->addComment($postId, $author, $comment);

  if ($affectedLines === false) {
    throw new Exception('Impossible d\'ajouter le commentaire !');
  } else {
    header('Location: index.php?action=post&postId=' . $postId);
  }
}

function editComment($postId, $commentId, $author, $comment) {
  $commentManager = new CommentManager();

  $affectedLines = $commentManager->editComment($commentId, $author, $comment);

  if ($affectedLines === false) {
    throw new Exception('Impossible d\'ajouter le commentaire !');
  } else {
    header('Location: index.php?action=post&postId=' . $postId);
  }
}
