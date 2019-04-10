<?php echo validation_errors(); ?>

<?php echo form_open('standards/create'); ?>

    <label for="title">Standard Code</label>
    <input type="input" name="standardCode" /><br />

    <label for="text">Standard Title</label>
    <textarea name="standardName"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>