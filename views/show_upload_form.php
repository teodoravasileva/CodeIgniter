<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('uploads/save_file');?>

<input type="file" name="userfile" size="50" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>

<?php
echo validation_errors();
?>