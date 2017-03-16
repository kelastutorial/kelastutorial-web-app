<br/><br/><br/>
    <?php foreach($git as $item) { ?>
    <a href="<?php echo site_url('git/'.$item['slug']); ?>.git"><?php echo $item['title']; ?></a><br/>
    <a href="<?php echo site_url('git/adminUpdatePost/'.$item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('git/adminDeletePost/'.$item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/git/adminAddPost">Add Post</a>