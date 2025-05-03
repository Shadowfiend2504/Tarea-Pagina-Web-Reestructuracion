<div class="row">
    <div class="col-6 col-12-small titulo">
        <p class="titulo" style="padding:0;">
            Práctica cultural, artística o recreativa<span class="requerido">*</span>
        </p>
        <span id="practica_error" class="requerido" style="display:none;">Seleccione al menos una práctica</span>
        <ul style="list-style:none">
            <li>
                <input type="checkbox" id="practica1" name="practica[]" value="Artes plásticas y visuales">
                <label for="practica1">Artes plásticas y visuales</label>
            </li>
            <li>
                <input type="checkbox" id="practica2" name="practica[]" value="Danza">
                <label for="practica2">Danza</label>
            </li>
            <li>
                <input type="checkbox" id="practica3" name="practica[]" value="Literatura">
                <label for="practica3">Literatura</label>
            </li>
            <li>
                <input type="checkbox" id="practica4" name="practica[]" value="Música">
                <label for="practica4">Música</label>
            </li>
            <li>
                <input type="checkbox" id="practica5" name="practica[]" value="Arte dramático">
                <label for="practica5">Arte dramático</label>
            </li>
            <li>
                <input type="checkbox" id="practica6" name="practica[]" value="Audiovisuales">
                <label for="practica6">Audiovisuales</label>
            </li>
            <li>
                <input type="checkbox" id="practica7" name="practica[]" value="Gastronomía">
                <label for="practica7">Gastronomía</label>
            </li>
            <li>
                <input type="checkbox" id="practica8" name="practica[]" value="Diseño">
                <label for="practica8">Diseño</label>
            </li>
            <li>
                <input type="checkbox" id="practica9" name="practica[]" value="Manualidades&#47artesanías">
                <label for="practica9">Manualidades/artesanías</label>
            </li>
            <li>
                <input type="checkbox" id="practica10" name="practica[]" value="Recreación">
                <label for
									<div class="col-6 col-12-small">
										<ul style="list-style:none">
											<li><label for="nombre_actividad" class="titulo">Nombre de la actividad<span class="requerido">*</span></label>
												<input size="30" type="text" id="nombre_actividad" name="nombre_actividad" maxlength="200" 
												style="margin-top:0;" placeholder="Nombre de la presentación tal y como se publicará" required>
											</li>
											<li><label for="nombre_artista" class="titulo">Nombre artista/agrupación<span class="requerido">*</span></label>
												<input size="30" type="text" id="nombre_artista" name="nombre_artista" maxlength="200" 
												style="margin-top:0;" placeholder="Por favor ponga el nombre para publicar" required>
											</li>
											<li><label for="enlace_actividad" class="col-6 col-12-small titulo">Enlace a la actividad / evento<span class="requerido">*</span></label>
												<input type="text" size="30" id="enlace_actividad" name="enlace_actividad" maxlength="500" placeholder="ej: http://www.youtube.com/watch?v=rxpTjcouaeQ" required>
												<p style="font-size:12px; font-weight:normal; line-height:20px;">Al publicar el enlace acepta la responsabilidad sobre la propiedad de los derechos de reproducción del contenido. Es decir son suyos o tiene autorización o conocimiento de que pueden publicarse libremente</p>
											</li>
											<li><label for="institucion_responsable">Institución responsable de la transmisión digital de la actividad / evento<span class="requerido">*</span></label>
												<input type="text" size="30" id="institucion_responsable" name="institucion_responsable" maxlength="200" required>
											</li>
											<li><label style="margin-top:30px;" for="trata_de">Explique brevemente de que trata la actividad en máximo 600 caracteres.<span class="requerido">*</span></label>
												<textarea id="trata_de" name="trata_de" maxlength="600" placeholder="Máximo 600 caracteres" rows="8" style="width:100%; line-height:21px;" onkeyup="countChars(this);" required></textarea><span id="cuantos_va">Van 0 de 600 máximo</span>
											</li>
										</ul>
									</div>