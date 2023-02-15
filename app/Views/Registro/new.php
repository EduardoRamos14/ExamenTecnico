<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <title>Examen/RegistroNuevo</title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body class="p-0 me-0 me-lg-2 bg-ligth">

<div class="container justify-content-center">
	<div class="card my-3">
		<div class="card-header" style="background-color: #3b5b50;">
		<h2 class="text-white fst-italic">Nuevo Registro</h2>
		</div>
		<div class="card-body fst-italic" >
		
    	<form action="<?=base_url()?>/Reg" method="post" enctype="multipart/form-data"   >

				<label class="mt-2">Nombre</label>
				<input class="form-control" required name="nombre" id="nombre" type="text" placeholder="NOMBRE" onkeyup="javascript:this.value=this.value.toUpperCase();"/>	

				<label class="mt-2">Edad</label>
				<input class="form-control" required name="edad" id="edad" type="text" placeholder="EDAD" onkeyup="javascript:this.value=this.value.toUpperCase();" />	

				<label class="mt-2">Genero</label>
				<input class="form-control" required name="genero" id="genero" type="text" placeholder="GENERO" onkeyup="javascript:this.value=this.value.toUpperCase();"/>	

				<label class="mt-2">Direccion</label>
				<input class="form-control" required name="direccion" id="direccion" type="text" placeholder=" DIRECION" onkeyup="javascript:this.value=this.value.toUpperCase();"/>	

				<label class="mt-2">Pais</label>
				<select required class="form-select" aria-label="Default select example" name="pais" id="pais">
					<option selected value="">Seleccionar</option>
					<option value="mexico">mexico</option>
					<option value="canada">canada</option>
					<option value="usa">usa</option>
					</select>

					
					<label class="mt-2">Estado</label>
				<select required class="form-select" aria-label="Default select example" name="estado" id="estado">
					<option selected value="">Seleccionar</option>
					<option value="Estado 1">Estado 1</option>
					<option value="Estado 2">Estado 2</option>
					<option value="Estado 3">Estado 3</option>
					</select>

				<div class="d-grid gap-2">
                <input type="submit" id="submit-btn" disabled  class="btn btn-success mt-4 mb-4 ms-2 me-2 btn d-grid gap-2 d-md-block" value="Registrar">
				</div>
        </form>
		</div>
	</div>
</div>
	
        

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>

  // Obtener el botón submit y los campos del formulario
  const submitBtn = document.getElementById('submit-btn');
  const formFields = document.querySelectorAll('form input, form select');

  // Añadir un listener a cada campo del formulario para comprobar si ha sido completado
  formFields.forEach(field => {
    field.addEventListener('input', () => {
      // Comprobar si todos los campos tienen un valor
      const allFieldsCompleted = Array.from(formFields).every(field => field.value);
      // Habilitar o deshabilitar el botón submit en consecuencia
      submitBtn.disabled = !allFieldsCompleted;
    });
  });

</script>
<script>
  // Obtener los elementos del formulario
  const countrySelect = document.getElementById('pais');
  const stateSelect = document.getElementById('estado');
  
  // Definir un objeto con los estados por país
  const statesByCountry = {
    usa: ['California', 'Florida', 'Texas'],
    mexico: ['Jalisco', 'Nuevo León', 'Veracruz'],
    canada: ['Ontario', 'Quebec', 'Alberta']
  };
  
  // Añadir un listener de eventos al select del país
  countrySelect.addEventListener('change', () => {
    // Obtener los estados del país seleccionado
    const selectedCountry = countrySelect.value;
    const states = statesByCountry[selectedCountry];
    
    // Vaciar el select de estados y deshabilitarlo si no hay estados
    stateSelect.innerHTML = '<option value="">Seleccione un estado</option>';
    stateSelect.disabled = true;
    
    // Añadir las opciones de estado al select y habilitarlo si hay estados
    if (states) {
      stateSelect.disabled = false;
      states.forEach(state => {
        const option = document.createElement('option');
        option.text = state;
        option.value = state;
        stateSelect.add(option);
      });
    }
  });
</script>

</body>
</html>