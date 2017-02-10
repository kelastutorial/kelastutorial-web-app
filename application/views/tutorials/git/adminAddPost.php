<?php echo validation_errors(); ?>

<?php echo form_open('git/adminAddPost'); ?>
    <label for="title">Title</label><br/>
    <input type="text" name="title"/><br/>
    <label for="content">Content</label><br/>
    <textarea name="content" rows="50"cols="150"></textarea><br/>
    <input type="submit" name="submit" value="submit"/><br/>

<?php echo form_close(); ?>