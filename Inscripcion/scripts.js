function test() {
	var verificar = new FormData(document.querySelector('form'));
	var primeraVerificacion = 0;
	var segundaVerificacion = 0;
	var terceraVerificacion = 0;

	if ($('#practica1').prop('checked')) {
		primeraVerificacion = 1;
	}
	if ($('#practica2').prop('checked')) {
		primeraVerificacion = 1;
	}
	// ...existing code...
	if ($('#tipo_actividad4').prop('checked')) {
		segundaVerificacion = 1;
	}
	if (primeraVerificacion == 0) {
		$('#practica_error').show();
		$('#practica1').focus();
	} else {
		$('#practica_error').hide();
		terceraVerificacion = 1;
	}
	if (segundaVerificacion == 0) {
		$('#tip_error').show();
		$('#tipo_actividad1').focus();
	} else {
		$('#tip_error').hide();
		terceraVerificacion += 1;
	}
	if (terceraVerificacion == 2) {
		$('#boton_enviar').click();
	}
	return false;
}

function countChars(obj) {
	document.getElementById("cuantos_va").innerHTML = 'Van ' + obj.value.length + ' de 600 máximo';
}