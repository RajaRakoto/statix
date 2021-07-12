$(document).ready(function(){
  //import json data format from (data.php)
  $.ajax({
    url: "http://localhost/project/statix/chart/data.php",
    method: "GET",
    success: function(data) {
      console.log(data); //a verifier dans la console de bargraph.html
      //nombre d'attribut de l'objet (ici attrib = 8)
      var id = [];
      var nom = [];
      var prenom = [];
      var activite = [];
      var etablissement = [];
      var filiere = [];
      var niveau = [];
      var freq = [];
      var date = [];

      //recuperation de valeur de chaque attribut de la table "statix_database"
      for (var i in data){
        id.push("id" + data[i].id);
        nom.push(data[i].nom);
        prenom.push(data[i].prenom);
        activite.push(data[i].activite);
        etablissement.push(data[i].etablissement);
        filiere.push(data[i].filiere);
        niveau.push(data[i].niveau);
        freq.push(data[i].freq);
        date.push(data[i].date);
      }

      //chart core (integration des donnees dans chartJS)
      var chartdata = {
				labels: date, //coo X reference
				datasets : [
					{
						label: 'nom',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: nom
					},
					{
						label: 'prenom',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: prenom
					},
					{
						label: 'activite',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: activite
					},
					{
						label: 'etablissement',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: etablissement
					},
					{
						label: 'filiere',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: filiere
					},
					{
						label: 'niveau',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: niveau
					},
					{
						label: 'freq',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: freq
					}
				]
			};

			var ctx = $("#mycanvas"); //creation du context a partir de l'id de canvas

			var barGraph = new Chart(ctx, {
				type: 'bar', //type de graph
				data: chartdata //importation des donnees "chartdata" dans le context
			});
      
		},
    error:function(data) {
      console.log(data);
    }
  });
});