<?php echo validation_errors(); ?>

<?php echo form_open('scrum/adminUpdatePost/'.$scrum_item['id']); ?>
    <label for="title">Title</label><br/>
    <input type="text" name="title" value="<?php echo $scrum_item['title'] ?>"/><br/>
    <label for="content">Content</label><br/>
    <textarea name="content" rows="50" cols="150"><?php echo $scrum_item['content'] ?></textarea><br/>
    <input type="submit" name="submit" value="submit"/><br/>

<?php echo form_close(); ?>