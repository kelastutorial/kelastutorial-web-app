<br/><br/><br/>
    <?php foreach($python as $item) { ?>
    <a href="<?php echo site_url('python/'.$item['slug']); ?>.html"><?php echo $item['title']; ?></a><br/>
    <a href="<?php echo site_url('python/adminUpdatePost/'.$item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('python/adminDeletePost/'.$item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/python/adminAddPost">Add Post</a>