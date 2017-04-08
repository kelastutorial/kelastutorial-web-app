<br/><br/><br/>
    <?php foreach($scrum as $item) { ?>
    <a href="<?php echo site_url('scrum/'.$item['slug']); ?>.html"><?php echo $item['title']; ?></a><br/>
    <a href="<?php echo site_url('scrum/adminUpdatePost/'.$item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('scrum/adminDeletePost/'.$item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/scrum/adminAddPost">Add Post</a>