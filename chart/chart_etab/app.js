/* CHART ETAB */

$(document).ready(function () {
	//import json data format from (data.php)
	$.ajax({
		url: 'http://localhost/project/STATIX/chart/chart_etab/data.php',
		method: 'GET',
		success: function (data) {
			console.log(data); //a verifier dans la console de index.html
			//nombre d'attribut de l'objet (ici attrib = 2)
			var etabFreq = [];
			var etabName = [];
			var date = [];

			//recuperation de valeur
			for (var i in data) {
				etabFreq.push(data[i].etabFreq);
				etabName.push(data[i].etabName);
				date.push(data[i].date);
        
      if (etabName[i] === undefined && date[i] === undefined) { //fix
          etabName[i] = "";
          date[i] = "";
      }
      }

      /*

        PYTHON generator 
        for x in range(<limit>):
        #etabName[0]+'('+date[0]+')'
        print("etabName[{0}]+'('+date[{0}]+')'".format(x))

      */

			//chart core (integration des donnees dans chartJS)
			var chartdata = {
				labels: [

etabName[0]+'      ('+date[0]+')',
etabName[1]+'      ('+date[1]+')',
etabName[2]+'      ('+date[2]+')',
etabName[3]+'      ('+date[3]+')',
etabName[4]+'      ('+date[4]+')',
etabName[5]+'      ('+date[5]+')',
etabName[6]+'      ('+date[6]+')',
etabName[7]+'      ('+date[7]+')',
etabName[8]+'      ('+date[8]+')',
etabName[9]+'      ('+date[9]+')',
etabName[10]+'       ('+date[10]+')',
etabName[11]+'       ('+date[11]+')',
etabName[12]+'       ('+date[12]+')',
etabName[13]+'       ('+date[13]+')',
etabName[14]+'       ('+date[14]+')',
etabName[15]+'       ('+date[15]+')',
etabName[16]+'       ('+date[16]+')',
etabName[17]+'       ('+date[17]+')',
etabName[18]+'       ('+date[18]+')',
etabName[19]+'       ('+date[19]+')',
etabName[20]+'       ('+date[20]+')',
etabName[21]+'       ('+date[21]+')',
etabName[22]+'       ('+date[22]+')',
etabName[23]+'       ('+date[23]+')',
etabName[24]+'       ('+date[24]+')',
etabName[25]+'       ('+date[25]+')',
etabName[26]+'       ('+date[26]+')',
etabName[27]+'       ('+date[27]+')',
etabName[28]+'       ('+date[28]+')',
etabName[29]+'       ('+date[29]+')',
etabName[30]+'       ('+date[30]+')',
etabName[32]+'       ('+date[32]+')',
etabName[33]+'       ('+date[33]+')',
etabName[34]+'       ('+date[34]+')',
etabName[35]+'       ('+date[35]+')',
etabName[36]+'       ('+date[36]+')',
etabName[37]+'       ('+date[37]+')',
etabName[38]+'       ('+date[38]+')',
etabName[39]+'       ('+date[39]+')',
etabName[40]+'       ('+date[40]+')',
etabName[41]+'       ('+date[41]+')',
etabName[42]+'       ('+date[42]+')',
etabName[43]+'       ('+date[43]+')',
etabName[44]+'       ('+date[44]+')',
etabName[45]+'       ('+date[45]+')',
etabName[46]+'       ('+date[46]+')',
etabName[47]+'       ('+date[47]+')',
etabName[48]+'       ('+date[48]+')',
etabName[49]+'       ('+date[49]+')',
etabName[50]+'       ('+date[50]+')',
etabName[51]+'       ('+date[51]+')',
etabName[52]+'       ('+date[52]+')',
etabName[53]+'       ('+date[53]+')',
etabName[54]+'       ('+date[54]+')',
etabName[55]+'       ('+date[55]+')',
etabName[56]+'       ('+date[56]+')',
etabName[57]+'       ('+date[57]+')',
etabName[58]+'       ('+date[58]+')',
etabName[59]+'       ('+date[59]+')',
etabName[60]+'       ('+date[60]+')'


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
						backgroundColor: 'rgba(59, 173, 245, 0.63)',
						borderColor: 'rgba(23, 93, 255, 0.87)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: etabFreq,
						hidden: true 
					},
					{//line: OK
						label: "ligne",
						type: 'line',
						backgroundColor: 'rgba(59, 173, 245, 0.63)',
						borderColor: 'rgba(23, 93, 255, 0.87)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: etabFreq,
					},
					{//line: OK
						label: "dispersion",
						type: 'scatter',
						backgroundColor: 'rgba(59, 173, 245, 0.63)',
						borderColor: 'rgba(23, 93, 255, 0.87)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: etabFreq,
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
					responsive: true
				},
			});
		},
		error: function (data) {
			console.log(data);
		},
	});
});
