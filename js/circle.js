function drawcircle(val, container){
	var bar = new ProgressBar.Circle(container, {
		color: '#56177D',
		strokeWidth: 45,
		trailWidth: 3,
		easing: 'easeInOut',
		duration: 1500,
		text: {
			autoStyleContainer: true,
			style: {
		    color: '#AAAAAA',
		    position: 'absolute',
		    left: '42%',
		    top: '42%',
		    padding: 0,
		    margin: 0
		}
	},
	from: { 
		color: '#56177D',
		width: 3
	},
	to: { 
		color: '#56177D',
		width: 3
		},
	step: function(state, circle) {
		circle.path.setAttribute('stroke', state.color);
		circle.path.setAttribute('stroke-width', state.width);

		var value = Math.round(circle.value() * 100);
			if(value === 0) circle.setText('');
			else circle.setText(value +'%');
		}
	});
	bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
	bar.text.style.fontSize = '2rem';

	console.log('Animation ' + container + ' loaded.');

	$('#skills').appear();
    $('#skills').on('appear', function(event, $all_appeared_elements) {
    	bar.animate(val, function() {
      		console.log('Animation ' + container + ' terminated.');
      	});
    });
}