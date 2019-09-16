
<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
<html>
<head><title>Upload new celeb information</title><head>
<center>
<body style="background-color:hsla(89, 43%, 51%, 0.3)" >
<h1>Add celebrity information</h1><br><hr>
<form action="<?php echo base_url();?>index.php/Contro/add" method="post" enctype="multipart/form-data">
Celebrity_name:<input type="text" name="celebname"> <hr>
Celebrity_image:<input type="file" name="picture"><hr>
<input type="submit" name="userSubmit" value="Submit celebrity information"><hr>
</form>
</body>
</center>
</html>
