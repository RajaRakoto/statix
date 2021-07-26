/* CHART ETAB */

$(document).ready(function () {
	//import json data format from (data.php)
	$.ajax({
		url: 'http://localhost/project/STATIX/chart/chart_members/data.php',
		method: 'GET',
		success: function (data) {
			console.log(data); //a verifier dans la console de index.html
			//nombre d'attribut de l'objet (ici attrib = 2)
			var id = [];
			var lastname = [];
			var freqEtu = [];
			var date = [];

			//recuperation de valeur
			for (var i in data) {
				id.push(data[i].id);
				freqEtu.push(data[i].freqEtu);
				lastname.push(data[i].lastname);
				date.push(data[i].date);
        
      if (lastname[i] === undefined && date[i] === undefined) { //fix
          lastname[i] = "name";
          date[i] = "date";
      }
      }

      /*

				for x in range(60):
				 print("lastname[{0}]+'['+id[{0}]+']'+'      ('+date[{0}]+')',".format(x))
				 x=x+1

      */

			//chart core (integration des donnees dans chartJS)
			var chartdata = {
				labels: [

lastname[0]+'['+id[0]+']'+'      ('+date[0]+')',
lastname[1]+'['+id[1]+']'+'      ('+date[1]+')',
lastname[2]+'['+id[2]+']'+'      ('+date[2]+')',
lastname[3]+'['+id[3]+']'+'      ('+date[3]+')',
lastname[4]+'['+id[4]+']'+'      ('+date[4]+')',
lastname[5]+'['+id[5]+']'+'      ('+date[5]+')',
lastname[6]+'['+id[6]+']'+'      ('+date[6]+')',
lastname[7]+'['+id[7]+']'+'      ('+date[7]+')',
lastname[8]+'['+id[8]+']'+'      ('+date[8]+')',
lastname[9]+'['+id[9]+']'+'      ('+date[9]+')',
lastname[10]+'['+id[10]+']'+'      ('+date[10]+')',
lastname[11]+'['+id[11]+']'+'      ('+date[11]+')',
lastname[12]+'['+id[12]+']'+'      ('+date[12]+')',
lastname[13]+'['+id[13]+']'+'      ('+date[13]+')',
lastname[14]+'['+id[14]+']'+'      ('+date[14]+')',
lastname[15]+'['+id[15]+']'+'      ('+date[15]+')',
lastname[16]+'['+id[16]+']'+'      ('+date[16]+')',
lastname[17]+'['+id[17]+']'+'      ('+date[17]+')',
lastname[18]+'['+id[18]+']'+'      ('+date[18]+')',
lastname[19]+'['+id[19]+']'+'      ('+date[19]+')',
lastname[20]+'['+id[20]+']'+'      ('+date[20]+')',
lastname[21]+'['+id[21]+']'+'      ('+date[21]+')',
lastname[22]+'['+id[22]+']'+'      ('+date[22]+')',
lastname[23]+'['+id[23]+']'+'      ('+date[23]+')',
lastname[24]+'['+id[24]+']'+'      ('+date[24]+')',
lastname[25]+'['+id[25]+']'+'      ('+date[25]+')',
lastname[26]+'['+id[26]+']'+'      ('+date[26]+')',
lastname[27]+'['+id[27]+']'+'      ('+date[27]+')',
lastname[28]+'['+id[28]+']'+'      ('+date[28]+')',
lastname[29]+'['+id[29]+']'+'      ('+date[29]+')',
lastname[30]+'['+id[30]+']'+'      ('+date[30]+')',
lastname[31]+'['+id[31]+']'+'      ('+date[31]+')',
lastname[32]+'['+id[32]+']'+'      ('+date[32]+')',
lastname[33]+'['+id[33]+']'+'      ('+date[33]+')',
lastname[34]+'['+id[34]+']'+'      ('+date[34]+')',
lastname[35]+'['+id[35]+']'+'      ('+date[35]+')',
lastname[36]+'['+id[36]+']'+'      ('+date[36]+')',
lastname[37]+'['+id[37]+']'+'      ('+date[37]+')',
lastname[38]+'['+id[38]+']'+'      ('+date[38]+')',
lastname[39]+'['+id[39]+']'+'      ('+date[39]+')',
lastname[40]+'['+id[40]+']'+'      ('+date[40]+')',
lastname[41]+'['+id[41]+']'+'      ('+date[41]+')',
lastname[42]+'['+id[42]+']'+'      ('+date[42]+')',
lastname[43]+'['+id[43]+']'+'      ('+date[43]+')',
lastname[44]+'['+id[44]+']'+'      ('+date[44]+')',
lastname[45]+'['+id[45]+']'+'      ('+date[45]+')',
lastname[46]+'['+id[46]+']'+'      ('+date[46]+')',
lastname[47]+'['+id[47]+']'+'      ('+date[47]+')',
lastname[48]+'['+id[48]+']'+'      ('+date[48]+')',
lastname[49]+'['+id[49]+']'+'      ('+date[49]+')',
lastname[50]+'['+id[50]+']'+'      ('+date[50]+')',
lastname[51]+'['+id[51]+']'+'      ('+date[51]+')',
lastname[52]+'['+id[52]+']'+'      ('+date[52]+')',
lastname[53]+'['+id[53]+']'+'      ('+date[53]+')',
lastname[54]+'['+id[54]+']'+'      ('+date[54]+')',
lastname[55]+'['+id[55]+']'+'      ('+date[55]+')',
lastname[56]+'['+id[56]+']'+'      ('+date[56]+')',
lastname[57]+'['+id[57]+']'+'      ('+date[57]+')',
lastname[58]+'['+id[58]+']'+'      ('+date[58]+')',
lastname[59]+'['+id[59]+']'+'      ('+date[59]+')'

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
						backgroundColor: 'rgba(255, 0, 0, 0.56)',
						borderColor: 'rgba(252, 12, 12, 0.87)',
						hoverBackgroundColor: 'rgba(150, 150, 150, 0.88)',
						hoverBorderColor: 'rgba(150, 150, 150, 0.88)',
						data: freqEtu,
					},
					{//line: OK
						label: "ligne",
						type: 'line',
						backgroundColor: 'rgba(255, 0, 0, 0.56)',
						borderColor: 'rgba(252, 12, 12, 0.87)',
						hoverBackgroundColor: 'rgba(150, 150, 150, 0.88)',
						hoverBorderColor: 'rgba(150, 150, 150, 0.88)',
						data: freqEtu,
						hidden: true 
					},
					{//line: OK
						label: "dispersion",
						type: 'scatter',
						backgroundColor: 'rgba(255, 0, 0, 0.56)',
						borderColor: 'rgba(252, 12, 12, 0.87)',
						hoverBackgroundColor: 'rgba(150, 150, 150, 0.88)',
						hoverBorderColor: 'rgba(150, 150, 150, 0.88)',
						data: freqEtu,
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
