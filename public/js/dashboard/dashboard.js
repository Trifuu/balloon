$( document ).ready(function() {

	var timeFormat = 'MM/DD/YYYY HH:mm';
	var color = Chart.helpers.color;
	var labels={'name':['AcceleratiaX','AcceleratiaY','AcceleratiaZ','GyroscopeX','GyroscopeY','GyroscopeZ','MagnetometruX','MagnetometruY','MagnetometruZ','Temperatura'],
				'color':["Red", "Blue", "Yellow", "Green", "Purple", "Orange","Black","Brown","Pink","#01D758"]};
	var config = {
			type: 'line',
		    data:{
					datasets:[ {
							label: labels.name[0],
							backgroundColor: labels.color[0],
							borderColor: labels.color[0],
							fill: false,
							data: []
						},{
							label: labels.name[1],
							backgroundColor: labels.color[1],
							borderColor: labels.color[1],
							fill: false,
							data: []
						},{
							label: labels.name[2],
							backgroundColor: labels.color[2],
							borderColor: labels.color[2],
							fill: false,
							data: []
						},{
							label: labels.name[3],
							backgroundColor: labels.color[3],
							borderColor: labels.color[3],
							fill: false,
							data: []
						},{
							label: labels.name[4],
							backgroundColor: labels.color[4],
							borderColor: labels.color[4],
							fill: false,
							data: []
						},{
							label: labels.name[5],
							backgroundColor: labels.color[5],
							borderColor: labels.color[5],
							fill: false,
							data: []
						},{
							label: labels.name[6],
							backgroundColor: labels.color[6],
							borderColor: labels.color[6],
							fill: false,
							data: []
						},{
							label: labels.name[7],
							backgroundColor: labels.color[7],
							borderColor: labels.color[7],
							fill: false,
							data: []
						},{
							label: labels.name[8],
							backgroundColor: labels.color[8],
							borderColor: labels.color[8],
							fill: false,
							data: []
						},{
							label: labels.name[9],
							backgroundColor: labels.color[9],
							borderColor: labels.color[9],
							fill: false,
							data: []
						}]
					},
			options: {
				title: {
					text: 'Chart.js Time Scale'
				},
				scales: {
					xAxes: [{
						type: 'time',
						time: {
							parser: timeFormat,
							// round: 'day'
							tooltipFormat: 'll HH:mm'
						},
						scaleLabel: {
							display: true,
							labelString: 'Date'
						}
					}],
					yAxes: [{
						scaleLabel: {
							display: true,
							labelString: 'value'
						}
					}]
				},
			}
	};
	var ctx = document.getElementById('canvas').getContext('2d');
	window.myLine = new Chart(ctx, config);
	
	update_Values();

	function update_Values(){
		var limita = $("#limita")[0].value;
		$.ajax({  
           url:        'http://localhost:8000/Values',
           type:       'POST',
           data: 		{limit:limita},
           dataType:   'json',
           async:      true,
           
           success: function(data, status) { 
           		console.log(data);
           		//myChart.data.labels.push(new Date(1));

           		for( var i=0;i<10;i++) {
           			window.myLine.data.datasets[i].data=[];
           			window.myLine.update();
           		}
           		for(var i = 0; i < data.length; i++) {
           			
       				window.myLine.data.datasets[0].data.push({
						x:new Date (data[i].time.date),
						y:data[i].acceleratiaX
					});
					window.myLine.data.datasets[1].data.push({
						x:new Date (data[i].time.date),
						y:data[i].acceleratiaY
					});
					window.myLine.data.datasets[2].data.push({
						x:new Date (data[i].time.date),
						y:data[i].acceleratiaZ
					});
					window.myLine.data.datasets[3].data.push({
						x:new Date (data[i].time.date),
						y:data[i].gyroscopeX
					});
					window.myLine.data.datasets[4].data.push({
						x:new Date (data[i].time.date),
						y:data[i].gyroscopeY
					});
					window.myLine.data.datasets[5].data.push({
						x:new Date (data[i].time.date),
						y:data[i].gyroscopeZ
					});
					window.myLine.data.datasets[6].data.push({
						x:new Date (data[i].time.date),
						y:data[i].magnetometruX
					});
					window.myLine.data.datasets[7].data.push({
						x:new Date (data[i].time.date),
						y:data[i].magnetometruY
					});
					window.myLine.data.datasets[8].data.push({
						x:new Date (data[i].time.date),
						y:data[i].magnetometruZ
					});
					window.myLine.data.datasets[9].data.push({
						x:new Date (data[i].time.date),
						y:data[i].temperatura
					});
					window.myLine.update();

           		}
           },   
           error : function(xhr, textStatus, errorThrown) {
              alert('Ajax request failed.');
           }
        });
		var delay = $("#delay")[0].value;
		if(delay<1)
			delay=1;
		delay*=1000;
        setTimeout(function(){update_Values();},delay);
        
	}
	
});