/* CHART ETAB */

$(document).ready(function () {
	//import json data format from (data.php)
	$.ajax({
		url: 'http://localhost/project/STATIX/chart/chart_filiere/data.php',
		method: 'GET',
		success: function (data) {
			console.log(data); //a verifier dans la console de index.html
			//nombre d'attribut de l'objet (ici attrib = 2)
			var filiereFreq = [];
			var filiereName = [];
			var date = [];

			//recuperation de valeur
			for (var i in data) {
				filiereFreq.push(data[i].filiereFreq);
				filiereName.push(data[i].filiereName);
				date.push(data[i].date);
        
      if (filiereName[i] === undefined && date[i] === undefined) { //fix
          filiereName[i] = "name";
          date[i] = "date";
      }
      }

      /*

        PYTHON generator 
        for x in range(<limit>):
        #filiereName[0]+'('+date[0]+')'
        print("filiereName[{0}]+'('+date[{0}]+')'".format(x))

      */

			//chart core (integration des donnees dans chartJS)
			var chartdata = {
				labels: [

filiereName[0]+'      ('+date[0]+')',
filiereName[1]+'      ('+date[1]+')',
filiereName[2]+'      ('+date[2]+')',
filiereName[3]+'      ('+date[3]+')',
filiereName[4]+'      ('+date[4]+')',
filiereName[5]+'      ('+date[5]+')',
filiereName[6]+'      ('+date[6]+')',
filiereName[7]+'      ('+date[7]+')',
filiereName[8]+'      ('+date[8]+')',
filiereName[9]+'      ('+date[9]+')',
filiereName[10]+'       ('+date[10]+')',
filiereName[11]+'       ('+date[11]+')',
filiereName[12]+'       ('+date[12]+')',
filiereName[13]+'       ('+date[13]+')',
filiereName[14]+'       ('+date[14]+')',
filiereName[15]+'       ('+date[15]+')',
filiereName[16]+'       ('+date[16]+')',
filiereName[17]+'       ('+date[17]+')',
filiereName[18]+'       ('+date[18]+')',
filiereName[19]+'       ('+date[19]+')',
filiereName[20]+'       ('+date[20]+')',
filiereName[21]+'       ('+date[21]+')',
filiereName[22]+'       ('+date[22]+')',
filiereName[23]+'       ('+date[23]+')',
filiereName[24]+'       ('+date[24]+')',
filiereName[25]+'       ('+date[25]+')',
filiereName[26]+'       ('+date[26]+')',
filiereName[27]+'       ('+date[27]+')',
filiereName[28]+'       ('+date[28]+')',
filiereName[29]+'       ('+date[29]+')',
filiereName[30]+'       ('+date[30]+')',
filiereName[32]+'       ('+date[32]+')',
filiereName[33]+'       ('+date[33]+')',
filiereName[34]+'       ('+date[34]+')',
filiereName[35]+'       ('+date[35]+')',
filiereName[36]+'       ('+date[36]+')',
filiereName[37]+'       ('+date[37]+')',
filiereName[38]+'       ('+date[38]+')',
filiereName[39]+'       ('+date[39]+')',
filiereName[40]+'       ('+date[40]+')',
filiereName[41]+'       ('+date[41]+')',
filiereName[42]+'       ('+date[42]+')',
filiereName[43]+'       ('+date[43]+')',
filiereName[44]+'       ('+date[44]+')',
filiereName[45]+'       ('+date[45]+')',
filiereName[46]+'       ('+date[46]+')',
filiereName[47]+'       ('+date[47]+')',
filiereName[48]+'       ('+date[48]+')',
filiereName[49]+'       ('+date[49]+')',
filiereName[50]+'       ('+date[50]+')',
filiereName[51]+'       ('+date[51]+')',
filiereName[52]+'       ('+date[52]+')',
filiereName[53]+'       ('+date[53]+')',
filiereName[54]+'       ('+date[54]+')',
filiereName[55]+'       ('+date[55]+')',
filiereName[56]+'       ('+date[56]+')',
filiereName[57]+'       ('+date[57]+')',
filiereName[58]+'       ('+date[58]+')',
filiereName[59]+'       ('+date[59]+')',
filiereName[60]+'       ('+date[60]+')'

/* 
	COLOR{

		black-test: rgba(0, 0, 0, 1)

		grey: rgba(150, 150, 150, 0.88)
		grey-transparent: rgba(150, 150, 150, 0.38)

		blue: rgba(23, 93, 255, 0.87)
		blue-transparent: rgba(59, 173, 245, 0.63)

		red: rgba(252, 12, 12, 0.87)
		red-transparent: rgba(255, 0, 0, 0.56)

		yellow: rgba(252, 229, 12, 1)
		yellow-transparent: rgba(252, 244, 12, 0.55)

		purple: rgba(204, 12, 252, 0.92)
		purple-transparent: rgba(252, 12, 249, 0.35)

		green: rgba(34, 196, 21, 0.87)	
		green-transparent: rgba(29, 252, 12, 0.5)

		brown: rgba(158, 99, 19, 0.88)
		brown-transparent: rgba(196, 121, 21, 0.65)

		cyan: rgba(19, 158, 156, 0.86)
		cyan-transparent: rgba(19, 158, 156, 0.39)

		orange: rgba(248, 126, 12, 0.91)
		orange-transparent: rgba(248, 126, 12, 0.49)

	}
*/

        ], //reference axe X
				datasets: [
					{
						label: "bar",
						type: 'bar',
						backgroundColor: 'rgba(252, 244, 12, 0.55)',
						borderColor: 'rgba(252, 229, 12, 1)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: filiereFreq,
						hidden: true 
					},
					{//line: OK
						label: "ligne",
						type: 'line',
						backgroundColor: 'rgba(252, 244, 12, 0.55)',
						borderColor: 'rgba(252, 229, 12, 1)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: filiereFreq,
					},
					{//line: OK
						label: "dispersion",
						type: 'scatter',
						backgroundColor: 'rgba(252, 244, 12, 0.55)',
						borderColor: 'rgba(252, 229, 12, 1)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: filiereFreq,
						hidden: true 
					}
				],
			};

			var ctx = $('#mycanvas'); //creation du context a partir de l'id de canvas

			var barGraph = new Chart(ctx, {
				type: 'bar', //type de graph
				data: chartdata, //importation des donnees "chartdata" dans le context
				options: {
					scales: {
						yAxes: [
							{
								ticks: {
									beginAtZero: true,
								},
							},
						],
					},
				},
			});
		},
		error: function (data) {
			console.log(data);
		},
	});
});
