<br/><br/><br/>
    <?php foreach($git as $git_item) { ?>
    <a href="<?php echo site_url('git/'.$git_item['slug']); ?>.html"><?php echo $git_item['title']; ?></a><br/>
    <a href="<?php echo site_url('git/adminUpdatePost/'.$git_item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('git/adminDeletePost/'.$git_item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/git/adminAddPost">Add Post</a>