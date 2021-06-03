<?php   


        if (isset($_GET['postID'])){
                include_once '../app/controllers/postsController.php';
                showAction($conn, $_GET['postID']);
        

        }

        else {
                include_once '../app/controllers/postsController.php';
                indexAction($conn);
        }

    