<html>
<title>Multi-Criteria Ingest</title>
<body>
	<h3>Multi-Criteria Ingest</h3>
	<p>Follow the file format</p>
	<p>userId,itemId,[value],...</p>

	<p>Follow the weights format</p>
	<p>value1,value2,value3,value4</p>

	<form action="upload_file.php" method="post" enctype="multipart/form-data">
		<label for="file">Filename: </label>
		<input type="file" name="file" id="file"><br/>
		<label for="file">Weights: </label>
		<input type="text" name="weights" id="weights"><br/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
?>