<br/><br/><br/>
    <?php foreach($json as $json_item) { ?>
    <a href="<?php echo site_url('json/'.$json_item['slug']); ?>.html"><?php echo $json_item['title']; ?></a><br/>
    <a href="<?php echo site_url('json/adminUpdatePost/'.$json_item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('json/adminDeletePost/'.$json_item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/json/adminAddPost">Add Post</a>