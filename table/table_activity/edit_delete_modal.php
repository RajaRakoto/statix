<!-- MODAL ACTION (edit|delete) -->

<!-- EDIT -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

						<!-- MODAL HEADER (maj)-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">MISE A JOUR</h4></center>
            </div>

						<!-- MODAL BODY (maj) -->
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php"> <!-- CALL EDIT.PHP (method=POST) -->

				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">

				<!-- CHAMP1 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom Activite:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="activityName" value="<?php echo $row['activityName']; ?>"> <!-- recup -->
					</div>
				</div>

				<!-- CHAMP2 -->
				<div class="row form-group">
					<div class="col-sm-2">
					<label class="control-label modal-label">Freq Activite:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" min="0" max="50" name="activityFreq" value="<?php echo $row['activityFreq']; ?>"> <!-- recup -->
					</div>
				</div>

        </div> 
		</div>

						<!-- MODAL FOOTER (maj)-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Mettre A Jour</a>
			</form>
            
					</div>
        </div>
    </div>
</div>

<!-- DELETE -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

						<!-- MODAL HEADER (delete) -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">SUPPRESSION</h4></center>
            </div>

						<!-- MODAL BODY (delete) -->
            <div class="modal-body">	
            	<p class="text-center">Vous etes sur de vouloir supprimer ?</p>
							<h5>
							<ul>
							<?php 
								echo "<li><strong>[ID]</strong>: ";
								echo $row['id'];
								echo "</li><br>";
								echo "<li><strong>[NAME]</strong>: ";
								echo $row['activityName'];
								echo "</li><br>";
								echo "<li><strong>[TOTAL]</strong>: ";
								echo $row['activityFreq'];
								echo "</li>";
							?>
							</ul>
							</h5>
						</div>

						<!-- MODAL FOOTER (delete)-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Non</button>

								<!-- CALL DELETE.PHP -->
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>

            </div>

        </div>
    </div>
</div>