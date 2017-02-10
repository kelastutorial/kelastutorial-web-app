<br/><br/><br/>
    <?php foreach($python as $python_item) { ?>
    <a href="<?php echo site_url('python/'.$python_item['slug']); ?>.html"><?php echo $python_item['title']; ?></a><br/>
    <a href="<?php echo site_url('python/adminUpdatePost/'.$python_item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('python/adminDeletePost/'.$python_item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/python/adminAddPost">Add Post</a>