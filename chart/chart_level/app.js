/* CHART ETAB */

$(document).ready(function () {
	//import json data format from (data.php)
	$.ajax({
		url: 'http://localhost/project/STATIX/chart/chart_level/data.php',
		method: 'GET',
		success: function (data) {
			console.log(data); //a verifier dans la console de index.html
			//nombre d'attribut de l'objet (ici attrib = 2)
			var levelFreq = [];
			var levelName = [];
			var date = [];

			//recuperation de valeur
			for (var i in data) {
				levelFreq.push(data[i].levelFreq);
				levelName.push(data[i].levelName);
				date.push(data[i].date);
        
      if (levelName[i] === undefined && date[i] === undefined) { //fix
          levelName[i] = "name";
          date[i] = "date";
      }
      }

      /*

        PYTHON generator 
        for x in range(<limit>):
        #levelName[0]+'('+date[0]+')'
        print("levelName[{0}]+'('+date[{0}]+')'".format(x))

      */

			//chart core (integration des donnees dans chartJS)
			var chartdata = {
				labels: [

levelName[0]+'      ('+date[0]+')',
levelName[1]+'      ('+date[1]+')',
levelName[2]+'      ('+date[2]+')',
levelName[3]+'      ('+date[3]+')',
levelName[4]+'      ('+date[4]+')',
levelName[5]+'      ('+date[5]+')',
levelName[6]+'      ('+date[6]+')',
levelName[7]+'      ('+date[7]+')',
levelName[8]+'      ('+date[8]+')',
levelName[9]+'      ('+date[9]+')',
levelName[10]+'       ('+date[10]+')',
levelName[11]+'       ('+date[11]+')',
levelName[12]+'       ('+date[12]+')',
levelName[13]+'       ('+date[13]+')',
levelName[14]+'       ('+date[14]+')',
levelName[15]+'       ('+date[15]+')',
levelName[16]+'       ('+date[16]+')',
levelName[17]+'       ('+date[17]+')',
levelName[18]+'       ('+date[18]+')',
levelName[19]+'       ('+date[19]+')',
levelName[20]+'       ('+date[20]+')',
levelName[21]+'       ('+date[21]+')',
levelName[22]+'       ('+date[22]+')',
levelName[23]+'       ('+date[23]+')',
levelName[24]+'       ('+date[24]+')',
levelName[25]+'       ('+date[25]+')',
levelName[26]+'       ('+date[26]+')',
levelName[27]+'       ('+date[27]+')',
levelName[28]+'       ('+date[28]+')',
levelName[29]+'       ('+date[29]+')',
levelName[30]+'       ('+date[30]+')',
levelName[32]+'       ('+date[32]+')',
levelName[33]+'       ('+date[33]+')',
levelName[34]+'       ('+date[34]+')',
levelName[35]+'       ('+date[35]+')',
levelName[36]+'       ('+date[36]+')',
levelName[37]+'       ('+date[37]+')',
levelName[38]+'       ('+date[38]+')',
levelName[39]+'       ('+date[39]+')',
levelName[40]+'       ('+date[40]+')',
levelName[41]+'       ('+date[41]+')',
levelName[42]+'       ('+date[42]+')',
levelName[43]+'       ('+date[43]+')',
levelName[44]+'       ('+date[44]+')',
levelName[45]+'       ('+date[45]+')',
levelName[46]+'       ('+date[46]+')',
levelName[47]+'       ('+date[47]+')',
levelName[48]+'       ('+date[48]+')',
levelName[49]+'       ('+date[49]+')',
levelName[50]+'       ('+date[50]+')',
levelName[51]+'       ('+date[51]+')',
levelName[52]+'       ('+date[52]+')',
levelName[53]+'       ('+date[53]+')',
levelName[54]+'       ('+date[54]+')',
levelName[55]+'       ('+date[55]+')',
levelName[56]+'       ('+date[56]+')',
levelName[57]+'       ('+date[57]+')',
levelName[58]+'       ('+date[58]+')',
levelName[59]+'       ('+date[59]+')',
levelName[60]+'       ('+date[60]+')'

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
						backgroundColor: 'rgba(19, 158, 156, 0.39)',
						borderColor: 'rgba(19, 158, 156, 0.86)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: levelFreq,
						hidden: true 
					},
					{//line: OK
						label: "ligne",
						type: 'line',
						backgroundColor: 'rgba(19, 158, 156, 0.39)',
						borderColor: 'rgba(19, 158, 156, 0.86)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: levelFreq,
					},
					{//line: OK
						label: "dispersion",
						type: 'scatter',
						backgroundColor: 'rgba(19, 158, 156, 0.39)',
						borderColor: 'rgba(19, 158, 156, 0.86)',
						hoverBackgroundColor: 'rgba(252, 12, 12, 0.87)',
						hoverBorderColor: 'rgba(252, 12, 12, 0.87)',
						data: levelFreq,
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
