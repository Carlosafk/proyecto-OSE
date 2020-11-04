<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('subir')}}" method="POST" enctype="multipart/form-data">
		  {{ csrf_field() }}

		<input type="file" name="pdf" style="margin-top:120px; ">
		<input type="submit" name="pdf" value="enviar">
	</form>
</body>
</html>