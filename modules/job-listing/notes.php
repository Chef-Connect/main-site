                <a href="../contenu-blog/contenu-blog.php">
                    <div class="article-container">
                        <div class="article-filter">
                            <h1> Comment chef-connect a réussi? </h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="row-container middle-container">
                    <div class="article-container">
                        <div class="article-filter">
                            <h1> Comment chef-connect a réussi? </h1>
                        </div>
                    </div>
                    <div class="void-container"></div>
                    <div class="article-container">
                        <div class="article-filter">
                            <h1> Comment chef-connect a réussi? </h1>
                        </div>
                    </div>
                    <div class="void-container"></div>
                    <div class="article-container">
                        <div class="article-filter">
                            <h1> Comment chef-connect a réussi? </h1>
                        </div>
                    </div>      
                </div>
                <div class="row-container bottom-container">
                    <div class="article-container">
                        <div class="article-filter">
                            <h1> Comment chef-connect a réussi? </h1>
                        </div>
                    </div>  
                </div>
            </div>


            <?php while($row=$rawData->fetch()){ ?>
                    <a href="../contenu-blog/contenu-blog.php?id=<?php echo $row['ID']; ?>">
                    <div class="article-container">
                        <div class="blog-image" style="background-image: url('../../assets/img/<?php echo $row["image_name"]; ?>')"> </div>
                        <div class="article-filter">
                            <h1> <?php echo $row['blog_title']; ?> </h1>
                        </div>
                    </div>
                    </a>
                <?php } ?>