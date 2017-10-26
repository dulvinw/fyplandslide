<form style="margin: 0 auto;" action="upload.php" method="post" enctype="multipart/form-data">
	
	<div class="form-group" style="padding-top: 15px; padding-bottom: 15px;">

	    <label for="exampleInputFile">Select Photo</label>
	    <input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload" aria-describedby="fileHelp">
	    <small id="fileHelp" class="form-text text-muted">Only upload files of type "JPEG" or "PNG". Maximum file size is 2MB</small>

	</div>

	<button type="submit" class="btn btn-primary btn-sm" style="background-color: #b63056;">UPLOAD</button>
</form>