<!-- MODAL GLOBAL -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

						<!-- MODAL HEADER -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">AJOUTER UN ETABLISSEMENT</h4></center>
            </div>

		<!-- MODAL BODY -->
    <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php"> <!-- CALL ADD.PHP (method=POST) -->

				<!-- CHAMP1 -->
				<div class="row form-group">
					<div class="col-sm-2">
					  <label class="control-label modal-label">Nom Etab:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="etabName" placeholder="Entrer le nom de l'etablissement ici" required>
					</div>
				</div>

				<!-- CHAMP2 -->
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Freq Etab:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="etabFreq" min="0" max="50" placeholder="Entrer le nombre de frequentation ici (0~50)" required>
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