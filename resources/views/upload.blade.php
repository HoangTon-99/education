<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>upload file</title>
</head>
<body>
<h1>upload file</h1>
<form action="upload" method="post" enctype="multipart/form-data">
	@csrf
	<input type="file" name="file" class="form_control">
	<button type="submit">Upload</button>
</form>
</body>
</html>