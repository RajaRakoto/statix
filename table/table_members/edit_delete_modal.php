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
						<label class="control-label modal-label">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>"> <!-- recup -->
					</div>
				</div>

				<!-- CHAMP2 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prenom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>"> <!-- recup -->
					</div>
				</div>

				<!-- CHAMP3 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Addresse:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>"> <!-- recup -->
					</div>
				</div>

				<!-- CHAMP4 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>"> <!-- recup -->
					</div>
				</div>

				<!-- CHAMP5 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Etablissement:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="etabEtu" value="<?php echo $row['etabEtu']; ?>"> <!-- recup -->
					</div>
				</div>

				<!-- CHAMP6 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Filiaire:</label>
					</div>					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="filiereEtu" value="<?php echo $row['filiereEtu']; ?>"> <!-- recup -->
					</div>
				</div>

				<!-- CHAMP7 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Niveau:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="levelEtu" value="<?php echo $row['levelEtu']; ?>"> <!-- recup -->
					</div>
				</div>

				<!-- CHAMP8 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Freq:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" min"0" max="9999" name="freqEtu" value="<?php echo $row['freqEtu']; ?>"> <!-- recup -->
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
								echo "<li><strong>[NOM]</strong>: ";
								echo $row['firstname'];
								echo "</li><br>";
								echo "<li><strong>[PRENOM]</strong>: ";
								echo $row['lastname'];
								echo "</li><br>";
								echo "<li><strong>[ADRESSE]</strong>: ";
								echo $row['address'];
								echo "</li><br>";
								echo "<li><strong>[CONTACT]</strong>: ";
								echo $row['contact'];
								echo "</li><br>";
								echo "<li><strong>[ETABLISSEMENT]</strong>: ";
								echo $row['etabEtu'];
								echo "</li><br>";
								echo "<li><strong>[NIVEAU]</strong>: ";
								echo $row['levelEtu'];
								echo "</li><br>";
								echo "<li><strong>[FREQ]</strong>: ";
								echo $row['freqEtu'];
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