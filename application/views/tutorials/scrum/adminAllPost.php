<br/><br/><br/>
    <?php foreach($scrum as $scrum_item) { ?>
    <a href="<?php echo site_url('scrum/'.$scrum_item['slug']); ?>.html"><?php echo $scrum_item['title']; ?></a><br/>
    <a href="<?php echo site_url('scrum/adminUpdatePost/'.$scrum_item['id']); ?>">Edit</a> |
    <a href="<?php echo site_url('scrum/adminDeletePost/'.$scrum_item['id']); ?>">Hapus</a>
    <hr/>
<?php } ?>
<a href="/scrum/adminAddPost">Add Post</a>