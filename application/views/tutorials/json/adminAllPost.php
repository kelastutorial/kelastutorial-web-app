<br/><br/><br/>
    <?php foreach($json as $item) { ?>
    <a href="<?php echo site_url('json/'.$item['slug']); ?>.html"><?php echo $item['title']; ?></a><br/>
    <a href="<?php echo site_url('json/adminUpdatePost/'.$item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('json/adminDeletePost/'.$item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/json/adminAddPost">Add Post</a>