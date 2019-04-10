<?php echo validation_errors(); ?>

<?php echo form_open('standards/edit/'.$standard['standardId']); ?>

    <h1>Amend Existing standard </h1>
    <h2><?php echo $standard['standardId']; ?></h2>

    <label for="title">Standard Code</label>
    <input type="input" name="standardCode" /><br />

    <label for="text">Standard Title</label>
    <textarea name="standardName"></textarea><br />

    <input type="submit" name="submit" value="Create new standard" />

</form>