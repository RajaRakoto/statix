/* CHART ETAB */

$(document).ready(function () {
	//import json data format from (data.php)
	$.ajax({
		url: 'http://localhost/project/STATIX/chart/chart_activity/data.php',
		method: 'GET',
		success: function (data) {
			console.log(data); //a verifier dans la console de index.html
			//nombre d'attribut de l'objet (ici attrib = 2)
			var activityFreq = [];
			var activityName = [];
			var date = [];

			//recuperation de valeur
			for (var i in data) {
				activityFreq.push(data[i].activityFreq);
				activityName.push(data[i].activityName);
				date.push(data[i].date);
        
      if (activityName[i] === undefined && date[i] === undefined) { //fix
          activityName[i] = "name";
          date[i] = "date";
      }
      }

      /*

        PYTHON generator 
        for x in range(<limit>):
        #activityName[0]+'('+date[0]+')'
        print("activityName[{0}]+'('+date[{0}]+')'".format(x))

      */

			//chart core (integration des donnees dans chartJS)
			var chartdata = {
				labels: [

activityName[0]+'      ('+date[0]+')',
activityName[1]+'      ('+date[1]+')',
activityName[2]+'      ('+date[2]+')',
activityName[3]+'      ('+date[3]+')',
activityName[4]+'      ('+date[4]+')',
activityName[5]+'      ('+date[5]+')',
activityName[6]+'      ('+date[6]+')',
activityName[7]+'      ('+date[7]+')',
activityName[8]+'      ('+date[8]+')',
activityName[9]+'      ('+date[9]+')',
activityName[10]+'       ('+date[10]+')',
activityName[11]+'       ('+date[11]+')',
activityName[12]+'       ('+date[12]+')',
activityName[13]+'       ('+date[13]+')',
activityName[14]+'       ('+date[14]+')',
activityName[15]+'       ('+date[15]+')',
activityName[16]+'       ('+date[16]+')',
activityName[17]+'       ('+date[17]+')',
activityName[18]+'       ('+date[18]+')',
activityName[19]+'       ('+date[19]+')',
activityName[20]+'       ('+date[20]+')',
activityName[21]+'       ('+date[21]+')',
activityName[22]+'       ('+date[22]+')',
activityName[23]+'       ('+date[23]+')',
activityName[24]+'       ('+date[24]+')',
activityName[25]+'       ('+date[25]+')',
activityName[26]+'       ('+date[26]+')',
activityName[27]+'       ('+date[27]+')',
activityName[28]+'       ('+date[28]+')',
activityName[29]+'       ('+date[29]+')',
activityName[30]+'       ('+date[30]+')',
activityName[32]+'       ('+date[32]+')',
activityName[33]+'       ('+date[33]+')',
activityName[34]+'       ('+date[34]+')',
activityName[35]+'       ('+date[35]+')',
activityName[36]+'       ('+date[36]+')',
activityName[37]+'       ('+date[37]+')',
activityName[38]+'       ('+date[38]+')',
activityName[39]+'       ('+date[39]+')',
activityName[40]+'       ('+date[40]+')',
activityName[41]+'       ('+date[41]+')',
activityName[42]+'       ('+date[42]+')',
activityName[43]+'       ('+date[43]+')',
activityName[44]+'       ('+date[44]+')',
activityName[45]+'       ('+date[45]+')',
activityName[46]+'       ('+date[46]+')',
activityName[47]+'       ('+date[47]+')',
activityName[48]+'       ('+date[48]+')',
activityName[49]+'       ('+date[49]+')',
activityName[50]+'       ('+date[50]+')',
activityName[51]+'       ('+date[51]+')',
activityName[52]+'       ('+date[52]+')',
activityName[53]+'       ('+date[53]+')',
activityName[54]+'       ('+date[54]+')',
activityName[55]+'       ('+date[55]+')',
activityName[56]+'       ('+date[56]+')',
activityName[57]+'       ('+date[57]+')',
activityName[58]+'       ('+date[58]+')',
activityName[59]+'       ('+date[59]+')',
activityName[60]+'       ('+date[60]+')'

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
						backgroundColor: 'rgba(252, 12, 249, 0.35)',
						borderColor: 'rgba(204, 12, 252, 0.92)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: activityFreq,
						hidden: true 
					},
					{//line: OK
						label: "ligne",
						type: 'line',
						backgroundColor: 'rgba(252, 12, 249, 0.35)',
						borderColor: 'rgba(204, 12, 252, 0.92)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: activityFreq,
					},
					{//line: OK
						label: "dispersion",
						type: 'scatter',
						backgroundColor: 'rgba(252, 12, 249, 0.35)',
						borderColor: 'rgba(204, 12, 252, 0.92)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: activityFreq,
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
