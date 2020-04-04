<!-- Edit Modal HTML -->
<div id="searchMsjModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="" name="busquedas">
                <div class="modal-header">
                    <h4 class="modal-title">Busquedas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>ESTADO</label>
                        <select name="estado" class="form-control">
                            <option value="ACTIVADO">ACTIVADO</option>
                            <option value="DESACTIVADO">DESACTIVADO</option>
                        </select>
                        <div class="form-group">
                            <label>FECHA</label>
                            <input name="fecha" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>OFICINA</label>
                            <select name="oficina" class="form-control">
                                <option selected>OFICINA...</option>
                                <option value="ARICA">ARICA</option>
                                <option value="IQUIQUE">IQUIQUE</option>
                                <option value="COPIAPO">COPIAPO</option>
                                <option value="LA SERENA">LA SERENA</option>
                                <option value="VILLA ALEMANA">VILLA ALEMANA</option>
                                <option value="SAN ANTONIO">SAN ANTONIO</option>
                                <option value="SAN FELIPE">SAN FELIPE</option>
                                <option value="QUILLOTA/LA LIGUA">QUILLOTA/LA LIGUA</option>
                                <option value="VALPARAISO">VALPARAISO</option>
                                <option value="VIÑA DEL MAR">VIÑA DEL MAR</option>
                                <option value="SANTIAGO">SANTIAGO</option>
                                <option value="PROVIDENCIA">PROVIDENCIA</option>
                                <option value="LA FLORIDA">LA FLORIDA</option>
                                <option value="PUENTE ALTO">PUENTE ALTO</option>
                                <option value="MAIPU">MAIPU</option>
                                <option value="RANCAGUA">RANCAGUA</option>
                                <option value="CURICO">CURICO</option>
                                <option value="TALCA">TALCA</option>
                                <option value="LINARES">LINARES</option>
                                <option value="CAUQUENES">CAUQUENES</option>
                                <option value="CHILLAN">CHILLAN</option>
                                <option value="LOS ANGELES">LOS ANGELES</option>
                                <option value="CAÑETE">CAÑETE</option>
                                <option value="TEMUCO">TEMUCO</option>
                                <option value="VALDIVIA">VALDIVIA</option>
                                <option value="PUERTO MONTT">PUERTO MONTT</option>
                                <option value="OSORNO">OSORNO</option>
                                <option value="CASTRO">CASTRO</option>
                                <option value="PUNTA ARENAS">PUNTA ARENAS</option>

                            </select>
						</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="CANCELAR">
                    <input type="submit" class="btn btn-success" value="BUSCAR" name="busquedas">
                </div>
            </form>
        </div>
    </div>
</div>