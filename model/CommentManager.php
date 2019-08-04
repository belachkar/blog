<?php

namespace Belachkar\Blog\Model;

use Belachkar\Blog\Model\Manager;
use PDO;

require_once 'model/manager.php';

class CommentManager extends Manager {
  public function getComments($postId) {
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT idComment, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = :postId ORDER BY date_comment DESC LIMIT 0, 5');
    $req->bindParam('postId', $postId, PDO::PARAM_INT);
    $req->execute();

    return $req;
  }

  public function getComment($commentId) {
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT idComment, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE idComment = :commentId');
    $req->bindParam('commentId', $commentId, PDO::PARAM_INT);
    $req->execute();
    $comment = $req->fetch();

    return $comment;
  }

  public function addComment($postId, $author, $comment) {
    $db = $this->dbConnect();
    $req = $db->prepare('INSERT INTO comments(post_id, author, comment) VALUES(:postId, :author, :comment)');
    $req->bindParam('postId', $postId, PDO::PARAM_INT);
    $req->bindParam('author', $author, PDO::PARAM_STR);
    $req->bindParam('comment', $comment, PDO::PARAM_STR);
    $affectedLines = $req->execute();

    return $affectedLines;
  }

  public function editComment($commentId, $author, $comment) {
    $db = $this->dbConnect();
    $req = $db->prepare('UPDATE comments SET author = :author, comment = :comment, date_comment = NOW() WHERE idComment = :commentId');
    $req->bindParam('commentId', $commentId, PDO::PARAM_INT);
    $req->bindParam('author', $author, PDO::PARAM_STR);
    $req->bindParam('comment', $comment, PDO::PARAM_STR);
    $affectedLines = $req->execute();

    return $affectedLines;
  }
}
