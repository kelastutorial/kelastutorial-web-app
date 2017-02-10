<br/><br/><br/>
    <?php foreach($java as $java_item) { ?>
    <a href="<?php echo site_url('java/'.$java_item['slug']); ?>.html"><?php echo $java_item['title']; ?></a><br/>
    <a href="<?php echo site_url('java/adminUpdatePost/'.$java_item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('java/adminDeletePost/'.$java_item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/java/adminAddPost">Add Post</a>