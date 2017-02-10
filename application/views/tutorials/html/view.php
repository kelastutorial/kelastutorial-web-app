        <div class="col s12 m12 l9">
            <div class="red darken-1 main-content-nav">
                <a href="<?php echo site_url() ?>" class="main-content-nav-title">Home</a>
                <a class="main-content-nav-title">></a>
                <a href="<?php echo site_url("html") ?>" class="main-content-nav-title">Python</a>
                <a class="main-content-nav-title">></a>
                <a href="<?php echo site_url("html") ?>/<?php echo $html_item['slug']; ?>.html" class="main-content-nav-title"><h1 class="main-content-heading"><?php echo $html_item['title']; ?></a>
            </div>
            <article class="main-content">
                <h2><?php echo $html_item['title']; ?></h2>
                <div class="main-content-article">
                    <?php echo $html_item['content']; ?>
                </div>
            </article>
        </div>
    </div>
</div>
