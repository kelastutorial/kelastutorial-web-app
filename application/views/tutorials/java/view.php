
                <div class="col s12 m12 l9">
                    <div class="red darken-1 main-content-nav">
                        <a href="<?php echo site_url() ?>" class="main-content-nav-title">Home</a>
                        <a class="main-content-nav-title">></a>
                        <a href="<?php echo site_url("java") ?>" class="main-content-nav-title">HTML</a>
                        <a class="main-content-nav-title">></a>
                        <a href="<?php echo site_url("java") ?>/<?php echo $item['slug']; ?>.java" class="main-content-nav-title"><h1 class="main-content-heading"><?php echo $item['title']; ?></a>
                    </div>
                    <article class="main-content">
                        <h2><?php echo $item['title']; ?></h2>
                        <div class="main-content-article">
                            <?php echo $item['content']; ?>
                            <div class="main-content-date">
                                <span>Diterbitkan <?php $published = strtotime($item['published']);echo date('j F Y', $published); ?></span> - 
                                <span>Update terakhir <?php $last_update = strtotime($item['last_update']);echo date('j F Y', $last_update); ?>.</span><br/>
                                <span>Kecuali diluar catatan, isi dari halaman ini dilisensikan di bawah <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License</a>, dan sampel kode dilisensikan dibawah <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache 2.0 License</a>. Untuk detail lebih lanjut lihat halaman <a href="https://kelastutorial.com/site-terms">Kebijakan Situs</a> kami.</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </body>
</html>