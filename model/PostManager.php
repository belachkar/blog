<?php

namespace Belachkar\Blog\Model;

use Belachkar\Blog\Model\Manager;
use PDO;

require_once 'model/manager.php';

class PostManager extends Manager {
  public function getPosts() {
    $db = $this->dbConnect();
    $req = $db->query('SELECT idPost, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY date_creation DESC LIMIT 0, 5');

    return $req;
  }

  public function getPost($postId) {
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT idPost, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE idPost = :postId');
    $req->bindParam('postId', $postId, PDO::PARAM_INT);
    $req->execute();
    $post = $req->fetch();

    return $post;
  }

  public function addPost($title, $content) {
    $db = $this->dbConnect();
    $req = $db->prepare('INSERT INTO posts(title, content) VALUES(:title, :content)');
    $req->bindParam('title', $title, PDO::PARAM_STR);
    $req->bindParam('content', $content, PDO::PARAM_STR);
    $affectedLines = $req->execute();

    return $affectedLines;
  }
}
