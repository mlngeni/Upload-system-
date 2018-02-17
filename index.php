<?php
include 'inc/header.inc.php';
require 'classes/upload.php';

 $show = new file();
?>
<body>
<h1 align="center">UPLOAD GALLERY</h1>



<hr>


<div align="center" style="padding-top: 60px;">
  
 	<?php $show->show(); ?>

</div>


<hr>


<form class="form-controll" method="POST" action="form-processing.php" enctype="multipart/form-data">

        <div class="container">
        	<label>Upload New Image(s)</label>
        
	<div class="form-group">
           
	<br><br><br>
	<label>Upload File</label>
	<input type="file" name="file" class="form-controll">

	<button name="upload" type="submit" class="btn btn-default">UPLOAD</button>
		
	</div>
	</div>
</form>

</body>
</html>