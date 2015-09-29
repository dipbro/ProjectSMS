<!doctype html>

<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
</head>
<body>
    <!-- Insert your content here -->
    <?php echo $error;?>

<?php echo form_open_multipart('fileupload/do_upload');?>

<input type="file" name="userfile" size="20" />
<br /><br />

<input type="submit" value="upload" />

</form>
</body>
</html>
