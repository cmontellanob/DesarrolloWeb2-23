<div style="display: flex; word-wrap: none;">
  
    <div id="opciones">
        <div>mes <select name="mes" id="mes" onchange="cargarFecha()">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">iciembre</option>
                
            </select></div>
        <div>
            anio : <select name="anio" id="anio" onchange="cargarFecha()">
                <?php for ($i = 1975; $i <= 2019; $i++) { ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div id="calendario">
        $nbsp;
    </div>

</div>