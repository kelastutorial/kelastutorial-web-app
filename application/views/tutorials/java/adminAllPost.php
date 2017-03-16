<br/><br/><br/>
    <?php foreach($java as $item) { ?>
    <a href="<?php echo site_url('java/'.$item['slug']); ?>.java"><?php echo $item['title']; ?></a><br/>
    <a href="<?php echo site_url('java/adminUpdatePost/'.$item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('java/adminDeletePost/'.$item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/java/adminAddPost">Add Post</a>