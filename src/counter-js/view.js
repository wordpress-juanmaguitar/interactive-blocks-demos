window.addEventListener( 'load', () => {
	const incrementButton = document.querySelector(
		'.wp-block-gutenberg-interactive-counter-js__increment'
	);
	const decrementButton = document.querySelector(
		'.wp-block-gutenberg-interactive-counter-js__decrement'
	);
	const valueBox = document.querySelector(
		'.wp-block-gutenberg-interactive-counter-js__value'
	);

	incrementButton.addEventListener( 'click', () => {
		valueBox.value =
			parseInt( valueBox.value ) + parseInt( valueBox.dataset.increment );
	} );

	decrementButton.addEventListener( 'click', () => {
		valueBox.value =
			parseInt( valueBox.value ) - parseInt( valueBox.dataset.increment );
	} );
} );
