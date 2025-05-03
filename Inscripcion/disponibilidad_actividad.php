<div class="col-12" style="border-top:1px solid">
    <p class="titulo" style="padding:0;">
        ¿Cuándo estará disponible la actividad?
    </p>
</div>

<div class="col-4 col-12-small">
    <input type="radio" id="Disponible_permanente" name="tiempo_actividad" value="Disponible permanente" onclick="
        $('#fecha_c1').fadeOut(1000);
        $('#fecha_c2').fadeOut(1100);
        $('#fecha_c3').fadeOut(1200);
        $('#cita_c1').fadeOut(1000);
        $('#cita_c2').fadeOut(1100);
        $('#desde').prop('value', '');
        $('#hasta').prop('value', '');
        $('#dias').prop('value', '');
        $('#fecha_actividad_inscripcion').prop('value', '');
        $('#correo_inscripcion').prop('value', '');
    " checked>
    <label for="Disponible_permanente">Disponible permanente</label>
</div>

<div class="col-4 col-12-small">
    <input type="radio" id="En_rango_tiempo" name="tiempo_actividad" value="En un rango de tiempo específico" onclick="
        $('#fecha_c1').fadeIn(600);
        $('#fecha_c2').fadeIn(1000);
        $('#fecha_c3').fadeIn(1400);
        $('#cita_c1').hide();
        $('#cita_c2').hide();
        $('#desde').prop('value', '');
        $('#hasta').prop('value', '');
        $('#dias').prop('value', '');
        $('#fecha_actividad_inscripcion').prop('value', '');
        $('#correo_inscripcion').prop('value', '');
    ">
    <label for="En_rango_tiempo">En un rango de tiempo específico</label>
</div>

<div class="col-4 col-12-small">
    <input type="radio" id="Con_previa_inscripción" name="tiempo_actividad" value="Con previa inscripción" onclick="
        $('#fecha_c1').hide();
        $('#fecha_c2').hide();
        $('#fecha_c2').required='false';
        $('#fecha_c3').hide();
        $('#fecha_c3').required='false';
        $('#cita_c1').fadeIn(800);
        $('#cita_c2').fadeIn(1200);
        $('#desde').prop('value', '');
        $('#hasta').prop('value', '');
        $('#dias').prop('value', '');
        $('#fecha_actividad_inscripcion').prop('value', '');
        $('#correo_inscripcion').prop('value', '');
    ">
    <label for="Con_previa_inscripción">Con previa inscripción</label>
</div>

<div id="fecha_c1" class="col-4 col-12-small" style="display:none; margin-top:40px;">
    <label for="desde">Fecha inicial<span class="requerido">*</span></label>
    <input type="date" id="desde" name="desde" onchange="
        $('#hasta').prop('value', $('#desde').prop('value'));
        $('#hasta').prop('min', $('#desde').prop('value'));
    ">
    <label for="tdesde">Hora inicial<span class="requerido">*</span></label>
    <input type="time" id="tdesde" name="tdesde">
</div>

<div id="fecha_c2" class="col-4 col-12-small" style="display:none; margin-top:40px;">
    <label for="hasta">Fecha final<span class="requerido">*</span></label>
    <input type="date" id="hasta" name="hasta">
    <label for="thasta">Hora final<span class="requerido">*</span></label>
    <input type="time" id="thasta" name="thasta">
</div>

<div id="fecha_c3" class="col-4 col-12-small" style="display:none;">
    <label for="dias">En estos días<span class="requerido">*</span></label>
    <ul style="list-style:none"></ul>
        <li><input type="checkbox" id="Lunes" name="dias[]" value="Lunes" checked><label for="Lunes">Lunes</label></li>
        <li><input type="checkbox" id="Martes" name="dias[]" value="Martes" checked><label for="Martes">Martes</label></li>
        <li><input type="checkbox" id="Miércoles" name="dias[]" value="Miércoles" checked><label for="Miércoles">Miércoles</label></li>
        <li><input type="checkbox" id="Jueves" name="dias[]" value="Jueves" checked><label for="Jueves">Jueves</label></li>
        <li><input type="checkbox" id="Viernes" name="dias[]" value="Viernes" checked><label for="Viernes">Viernes</label></li>
        <li><input type="checkbox" id="Sábado" name="dias[]" value="Sábado" checked><label for="Sábado">Sábado</label></li>
        <li><input type="checkbox" id="Domingo" name="dias[]" value="Domingo" checked><label for="Domingo">Domingo</label></li>
    </ul>
</div>

<div id="cita_c1" class="col-6 col-12-small" style="display:none;">
    <label for="fecha_actividad_inscripcion">Fecha de la actividad<span class="requerido">*</span></label>
    <input type="date" id="fecha_actividad_inscripcion" name="fecha_actividad_inscripcion">
    <label for="tfecha_actividad_inscripcion">Hora de la actividad<span class="requerido">*</span></label>
    <input type="time" id="tfecha_actividad_inscripcion" name="tfecha_actividad_inscripcion">
</div>

<div id="cita_c2" class="col-6 col-12-small" style="display:none;">
    <label for="correo_inscripcion">Url, correo o teléfono de inscripción<span class="requerido">*</span></label>
    <input type="text" size="30" maxlength="200" id="correo_inscripcion" name="correo_inscripcion">
</div>

<div class="col-12" style="border-top:1px solid; margin-top:50px;"></div>

<div class="col-6 col-12-small">
    <ul style="list-style:none">
        <li>
            <label for="duracion" class="titulo">Duración de la actividad / evento en minutos<span class="requerido">*</span></label>
            <span id="muestre_duracion">10 minutos</span>
            <input type="range" id="duracion" name="duracion" style="margin-top:0; border:1px solid; width:90%" min="10" max="180" value="10" step="10" onchange="
                document.getElementById('muestre_duracion').innerHTML=this.value + ' minutos';
            ">
        </li>
        <li>
            <label for="nacionalidad" class="titulo">Nacionalidad del artista o de la agrupación<span class="requerido">*</span></label>
            <input size="30" type="text" id="nacionalidad" name="nacionalidad" maxlength="200" style="margin-top:0;" required>
        </li>
        <li>
            <label for="pais_transmision" class="titulo">País sede de la institución desde donde se transmite la actividad o el evento</label>
            <input size="30" type="text" id="pais_transmision" name="pais_transmision" maxlength="200">
        </li>
        <li>
            <label for="sitio_web" class="titulo">Web del artista / agrupación / institución<span class="requerido">*</span></label>
            <input size="30" maxlength="500" type="text" id="sitio_web" name="sitio_web" style="margin-top:0;" required>
        </li>
    </ul>
</div>
