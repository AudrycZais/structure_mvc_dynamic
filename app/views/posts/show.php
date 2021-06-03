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

            <?php  include '../app/views/authors/show.php' ?> 


            <div class="pt-5 mt-5">
              <h3 class="mb-5">3 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                </li>

                <li class="comment">
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                </li>

                <li class="comment">
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                </li>
              </ul>
        
