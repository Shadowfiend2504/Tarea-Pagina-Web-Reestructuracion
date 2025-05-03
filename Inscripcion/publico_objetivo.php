<div class="col-6 col-12-small">
    <span><strong>Público</strong></span>
    <ul style="list-style:none">
        <li>
            <input type="radio" id="Familiar" name="publico" value="Familiar" onclick="$('#cual2').fadeOut();" checked>
            <label for="Familiar">Familiar</label>
        </li>
        <li>
            <input type="radio" id="Adultos" name="publico" value="Adultos" onclick="$('#cual2').fadeOut();">
            <label for="Adultos">Adultos</label>
        </li>
        <li>
            <input type="radio" id="otro2" name="publico" value="Otro" onclick="$('#cual2').prop('value', ''); $('#cual2').fadeToggle();">
            <label for="otro2">Otro</label>
            <input maxlength="30" size="35" type="text" id="cual2" name="publico2" placeholder="Separe con punto y coma(;)" style="display:none;">
        </li>
    </ul>
</div>