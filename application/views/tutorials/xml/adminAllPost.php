<br/><br/><br/>
    <?php foreach($xml as $xml_item) { ?>
    <a href="<?php echo site_url('xml/'.$xml_item['slug']); ?>.html"><?php echo $xml_item['title']; ?></a><br/>
    <a href="<?php echo site_url('xml/adminUpdatePost/'.$xml_item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('xml/adminDeletePost/'.$xml_item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/xml/adminAddPost">Add Post</a>