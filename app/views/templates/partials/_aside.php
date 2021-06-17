<?php

/**
 * 
 * ./app/views/templates/partials/_aside.php
 * 
 */
?>

<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
  <div class="sidebar-box">
    <form action="#" class="search-form">
      <div class="form-group">
        <span class="icon icon-search"></span>
        <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
      </div>
    </form>
  </div>
  <div class="sidebar-box ftco-animate">
    <div class="categories">

      <div class="sidebar-box ftco-animate">
        <div class="categories">
          <?php
          include_once '../app/models/categoriesModel.php';
          $categories = \App\Model\categoriesModel\findAll($conn);
          include '../app/views/posts/_categories.php';
          ?>
        </div>
      </div>
      <div class="sidebar-box ftco-animate">


        <?php
        include_once '../app/models/postsModel.php';
        $posts = \App\Model\PostsModel\findAll($conn, 3);
        include '../app/views/posts/_recents.php';
        ?>

      </div>

      <div class="sidebar-box ftco-animate">

        <?php
        include_once '../app/models/tagsModel.php';
        $tags = \App\Model\TagsModel\findAll($conn);
        include '../app/views/posts/_tags.php';
        ?>
      </div>

    </div>

  </div>
</div>