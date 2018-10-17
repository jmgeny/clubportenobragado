   <section id="contact" class="map">
<div class="container">
	<h1 class="text-center">Formulario de Contacto</h1>
	<form action="send" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre">
		</div>

		<div class="form-group">
			<label for="apellido">Apellido</label>
			<input type="text" class="form-control" id="apellido" name="apellido">
		</div>

	  <div class="form-group">
	    <label for="email">e-mail</label>
	    <input type="email" class="form-control" id="email" name="email">
	  </div>

	  <div class="form-group">
	  	<label for="mensaje">Mensaje</label>
	  	<textarea name="mensaje" id="mensaje" class="form-control" rows="5"></textarea>
	  </div>

	  <button type="submit" class="btn btn-default">Enviar</button>

	</form>
</div>

    </section>