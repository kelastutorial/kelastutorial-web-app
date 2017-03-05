<br/><br/><br/>
    <?php foreach($html as $item) { ?>
    <a href="<?php echo site_url('html/'.$item['slug']); ?>.html"><?php echo $item['title']; ?></a><br/>
    <a href="<?php echo site_url('html/adminUpdatePost/'.$item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('html/adminDeletePost/'.$item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/html/adminAddPost">Add Post</a>