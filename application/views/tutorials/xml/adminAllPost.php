<br/><br/><br/>
    <?php foreach($xml as $item) { ?>
    <a href="<?php echo site_url('xml/'.$item['slug']); ?>.xml"><?php echo $item['title']; ?></a><br/>
    <a href="<?php echo site_url('xml/adminUpdatePost/'.$item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('xml/adminDeletePost/'.$item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/xml/adminAddPost">Add Post</a>