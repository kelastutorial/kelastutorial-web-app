<?php echo validation_errors(); ?>

<?php echo form_open('scrum/adminUpdatePost/'.$item['id']); ?>
    <label for="title">Title</label><br/>
    <input type="text" name="title" value="<?php echo $item['title']; ?>"/><br/>
    <label for="content">Content</label><br/>
    <textarea name="content" rows="50" cols="150"><?php echo $item['content']; ?></textarea><br/>
    <label for="meta_desc">Meta Description</label><br/>
    <textarea name="meta_desc" rows="20"cols="150"><?php echo $item['meta_desc']; ?></textarea><br/>
    <input type="hidden" name="published" value="<?php echo $item['published']; ?>" readonly="readonly">
    <input type="hidden" name="last_update" value="<?php echo date('Y-m-d'); ?>" readonly="readonly">
    <input type="submit" name="submit" value="submit"/><br/>

<?php echo form_close(); ?>