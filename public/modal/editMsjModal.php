<!-- Edit Modal HTML -->
<div id="editMsjModal_<?php echo $row['id_sugerencia']; ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="modal/send_mail.php">
					<div class="modal-header">
						<h4 class="modal-title">Responder Mensajes De Correo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>CORREO</label>
							<input name="correo" type="email" class="form-control" disabled value="<?php echo $row['correo']; ?>">
						</div>
						<div class="form-group">
                            <label>MENSAJE</label>
                            <textarea name="comentario" class="form-control" disabled rows="10" style="height:100%;"><?php echo $row['comentario']; ?></textarea>
						</div>
						<div class="form-group">
							<label>RESPUESTA</label>
							<textarea name="respuesta" class="form-control" required  rows="10" style="height:100%;"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="CANCELAR">
						<input type="submit" class="btn btn-success" value="GUARDAR">
					</div>
				</form>
			</div>
		</div>
	</div>