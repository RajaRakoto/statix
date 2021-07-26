<!-- MODAL GLOBAL -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

						<!-- MODAL HEADER -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">AJOUTER UN ETUDIANT</h4></center>
            </div>

		<!-- MODAL BODY -->
    <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php"> <!-- CALL ADD.PHP (method=POST) -->

				<!-- CHAMP1 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" placeholder="Entrer le nom ici" required>
					</div>
				</div>

				<!-- CHAMP2 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prenom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" placeholder="Entrer le prenom ici" required>
					</div>
				</div>

				<!-- CHAMP3 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" placeholder="Entrer l'adresse ici" required>
					</div>
				</div>

				<!-- CHAMP4 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact" placeholder="Entrer le contact ici" required>
					</div>
				</div>

				<!-- CHAMP5 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Etab:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="etabEtu" placeholder="Entrer l'etablissement ici" required>
					</div>
				</div>

				<!-- CHAMP6 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Filiere:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="filiereEtu" placeholder="Entrer la filiere ici" required>
					</div>
				</div>

				<!-- CHAMP7 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Niveau:</label>
					</div>
					<div class="col-sm-10">
								<select name="levelEtu" id="levelEtu" class="form-control">
					        <option value="Universitaire">Universitaire</option>
					        <option value="Primaire">Primaire</option>
					        <option value="Secondaire">Secondaire</option>
					        <option value="Lycee">Lycee</option>
					        <option value="L1">L1</option>
					        <option value="L2">L2</option>
					        <option value="L3">L3</option>
					        <option value="M1">M1</option>
					        <option value="M2">M2</option>
					      </select>
					</div>
				</div>
				</div>

				<!-- CHAMP8 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Freq:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" min="0" max="99999" name="freqEtu" placeholder="Entrer la frequentation de l'etudiant ici" value="1" required>
					</div>
				</div>

      </div> 
		</div>

			<!-- MODAL FOOTER -->
        <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer</a>
			</form>
      </div>
    </div>
  </div>
</div>