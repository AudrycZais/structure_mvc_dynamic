<?php


namespace App\Controllers\PostsController;
use \App\Models\PostsModel;



    function indexAction(\PDO $conn) {
        include_once '../app/models/postsModel.php';
        $posts = PostsModel\findAll($conn);

        GLOBAL $content;

        ob_start();
            include '../app/views/posts/index.php';
        $content = ob_get_clean();
    }

    function showAction(\PDO $conn, int $id) {
        include_once '../app/models/postsModel.php';
        $post = PostsModel\findOneByID($conn, $id);

        include_once '../app/models/tagsModel.php';
        $tags= \App\Models\AuthorsModel\findAllByPostId($conn,$id);

        include_once '../app/models/authorsModel.php';
        $author = \App\Models\AuthorsModel\findOneByID($conn, $post['author_id']);

        include_once '../app/models/commentsModel.php';

        $comments = \App\Models\CommentsModel\findAllByPostId($conn, $id);

    
        GLOBAL $content;
        ob_start();
        include '../app/views/posts/show.php';
        $content = ob_get_clean();
    }

    