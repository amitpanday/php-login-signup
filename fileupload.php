<?php
if(isset($_POST['submit']))
{
$f_name=$_FILES['file']['name'];
$f_tmp=$_FILES['file']['tmp_name'];
$f_size=$_FILES['file']['size'];
$f_extention= explode('.',$f_name);
$f_extention=strtolower(end($f_extention));
$f_newfile=uniqid().'.'.$f_extention;
$store="uploads/".$f_newfile;
if($f_extention=='png'|| $f_extention=='jpg' || $f_extention=='gif')
{
	if($f_size<=76800)
	{
	move_uploaded_file($f_tmp,$store);
	}
	else
	{
		echo"file is too large";
	}
}
else
{
	echo"worng format";
}


}
?>
<html>
<form method="POST" enctype="multipart/form-data">
<input type="file" name="file"><br>
<input type="submit" value="submit" name="submit">
</FORM>
</html>