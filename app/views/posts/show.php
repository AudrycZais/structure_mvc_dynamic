<?php 

?>

        
    
        
            <img src="../public/assets/images/<?php echo $post['image'] ?>" alt="" class="img-fluid">
            </p>

            <h1 class="mb-3 h1"><?php echo $post['title'] ?></h1>
            <p><?php echo $post['content'] ?></p>
            <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
            <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>

            <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">

                    <?php  include '../app/views/tags/_index.php' ?>  

                </div>
            </div>

            <?php  include '../app/views/authors/show.php'; ?> 

            <?php include_once '../app/views/comments/show.php';?>

