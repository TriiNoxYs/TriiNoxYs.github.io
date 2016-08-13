function drawcircle(val, container){
    /*window.onload = function onLoad() {*/
		var bar = new ProgressBar.Circle(container, {
			color: '#56177D',
			strokeWidth: 35,
			trailWidth: 3,
			easing: 'easeInOut',
			duration: 1500,
			text: {
				autoStyleContainer: true,
				style: {
		            color: '#AAAAAA',
		            position: 'absolute',
		            left: '46%',
		            top: '42%',
		            padding: 0,
		            margin: 0
		        }
			},
			from: { 
				color: '#56177D',
				width: 1
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

		bar.animate(val, function() {
			console.log('Animation ' + container + ' terminated.');
		});
	/*};*/
}