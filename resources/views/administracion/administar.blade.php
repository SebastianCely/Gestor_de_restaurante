@include("layouts.navbar")
<!DOCTYPE html>
<html>
<head>
	<title>Administrar Restaurantes</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/crear.css')}}">
</head>
<body>
	<div class="contenedor_crud">
		<form id="crear" method="POST" action="{{url('/administrar')}}">
      @csrf
			<div class="header">
        
        <h3>Registrar Restaurante</h3>
            
      </div>
            <!-- <div class="inputs"> -->
            	<input type="text" placeholder="Nombre" name="Nombre">
           		<input type="text" placeholder="Descripcion" name="Descripcion">
           		<input type="text" placeholder="Direccion" name="Direccion">
           		<input type="text" placeholder="Ciudad" name="Ciudad">
           		<input type="text" placeholder="url" name="url">
           		<label for="Foto_restaurante">Suba una foto del restaurante</label>
           		<input type="file" name="Foto_restaurante" id="Foto_restaurante">
            	<!-- <a id="submit" name="enviar" type="submit">Registrar</a> -->
              <input type="submit" class="btn btn-primary" name="enviar" value="enviar">
        	<!-- </div>	 -->
		</form>
		
	</div>
</body>
</html>