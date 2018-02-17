<?php

require 'classes/upload.php';
include 'inc/header.inc.php';

$fileUpload = new file();

if (isset($_FILES['file'])) {
	
	$fileUpload->uploadFile($_FILES['file']);
	echo "<label class='success'>Upload success</label>";
}

?>