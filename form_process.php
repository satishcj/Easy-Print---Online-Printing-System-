<?php

require 'class.file.php';

$fileUpload = new File();

if (isset($_FILES['file']))
{
	//submit to  the file upload function
	$fileUpload->uploadFile($_FILES['file']);
}
else
{
	die('File  was not submitted');
}