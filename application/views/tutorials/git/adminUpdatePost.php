<?php echo validation_errors(); ?>

<?php echo form_open('git/adminUpdatePost/'.$item['id']); ?>
    <label for="title">Title</label><br/>
    <input type="text" name="title" value="<?php echo $item['title'] ?>"/><br/>
    <label for="content">Content</label><br/>
    <textarea name="content" rows="50" cols="150"><?php echo $item['content'] ?></textarea><br/>
    <label for="meta_desc">Meta Description</label><br/>
    <textarea name="meta_desc" rows="20"cols="150"></textarea><br/>
    <input type="submit" name="submit" value="submit"/><br/>

<?php echo form_close(); ?>