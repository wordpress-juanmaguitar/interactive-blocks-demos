window.addEventListener( 'load', () => {
	const blockClassPrefix = '.wp-block-gutenberg-interactive-counter-js'
	const incrementButton = document.querySelector(blockClassPrefix + '__increment');
	const decrementButton = document.querySelector(blockClassPrefix + '__decrement');
	const valueBox = document.querySelector(blockClassPrefix + '__value');
	
	incrementButton.addEventListener( 'click', () => {
		valueBox.value = parseInt(valueBox.value) + parseInt(valueBox.step)
	})
	decrementButton.addEventListener( 'click', () => {
		valueBox.value = parseInt(valueBox.value) - parseInt(valueBox.step)
	})
} );
