<br/><br/><br/>
    <?php foreach($html as $html_item) { ?>
    <a href="<?php echo site_url('html/'.$html_item['slug']); ?>.html"><?php echo $html_item['title']; ?></a><br/>
    <a href="<?php echo site_url('html/adminUpdatePost/'.$html_item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('html/adminDeletePost/'.$html_item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/html/adminAddPost">Add Post</a>