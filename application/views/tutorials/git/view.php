        <div class="col s12 m12 l9">
            <div class="red darken-1 main-content-nav">
                <a href="<?php echo site_url() ?>" class="main-content-nav-title">Home</a>
                <a class="main-content-nav-title">></a>
                <a href="<?php echo site_url("git") ?>" class="main-content-nav-title">Git</a>
                <a class="main-content-nav-title">></a>
                <a href="<?php echo site_url("git") ?>/<?php echo $item['slug']; ?>.html" class="main-content-nav-title"><h1 class="main-content-heading"><?php echo $item['title']; ?></a>
            </div>
            <article class="main-content">
                <h2><?php echo $item['title']; ?></h2>
                <div class="main-content-article">
                    <?php echo $item['content']; ?>
                    <br/>Diterbitkan : <?php $published = strtotime($item['published']);echo date('F j, Y', $published); ?>
                    <br/>Update terakhir : <?php $last_update = strtotime($item['last_update']);echo date('F j, Y', last_update); ?>
                </div>
            </article>
        </div>
    </div>
</div>