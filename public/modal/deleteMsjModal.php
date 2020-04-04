	<!-- Delete Modal HTML -->
	<div id="deleteMsjModal_<?php echo $row['id_sugerencia']; ?>" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <form method="POST" action="modal/delete.php?id_sugerencia=<?php echo $row['id_sugerencia']; ?>">
	                <div class="modal-header">
	                    <h4 class="modal-title">Eliminar mensajes</h4>
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                </div>
	                <div class="modal-body">
	                    <p>¿Seguro que quieres eliminar estos registros?</p>
	                    <p class="text-warning">
                            <small>Esta acción no se puede deshacer.</small>
                        </p>
	                </div>
	                <div class="modal-footer">
	                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
	                    <input type="submit" class="btn btn-danger" value="Delete">
	                </div>
	            </form>
	        </div>
	    </div>
	</div>