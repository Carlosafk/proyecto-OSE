<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<!--<input type="button" onclick="alert('¡Hay convenios a renovar!')" value="" />-->
 	@if($fecha == $f){
 	<script>
                alert('Se requiere actualizar el convenio de la empresa:$empre');
                window.location= '{{route('Home.index')}}'
                </script>"
 }
 else{
 <label>no hay convenios a actualizar</label>
}

		
</body>
</html>