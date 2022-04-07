window.addEventListener( 'load', () => {
	const incrementButton = document.querySelector(
		'.wp-block-gutenberg-interactive-counter-js__increment'
	);
	const decrementButton = document.querySelector(
		'.wp-block-gutenberg-interactive-counter-js__decrement'
	);
	incrementButton.addEventListener( 'click', () => {
		console.log("+")
	})
	decrementButton.addEventListener( 'click', () => {
		console.log("-")
	})
} );
