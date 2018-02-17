<?php


class file{
	 //the file formats
	private $supportFormat = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];


	public function uploadFile($file) {
          //the functionality that uploads the file(S)
		if (is_array($file)) {
			  
			  if (in_array($file['type'], $this->supportFormat)) {
			  	 
			  	 move_uploaded_file($file['tmp_name'], 'uploads/'.$file['name'].'');

			  	 header("Location: index.php?fileupload=success");
			  }else{
			  	die('File Format not supported');
			  }
		}else{
			die("File upload Failed");
		}
	}


	public function show() {

		//the functionality to show the files that have been uploaded on the index page
		$dir = "uploads/";
		

		if ($opendir = opendir($dir)) {
			while (($file = readdir($opendir)) !== FALSE){
				if ($file!="." && $file!="..") {


					echo "<img style='border-radius:50%; margin:30px 40px;' width=30%; height= 30%; src='$dir/$file'>"; 
				}
			}
		}
	}
}

