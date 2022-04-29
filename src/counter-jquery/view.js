console.log("---")
console.log(jQuery)
jQuery('document').load( () => {
	const $input = jQuery('.wp-block-gutenberg-interactive-counter-js__value');
	const step = parseInt($input.attr("step"))

	jQuery('.wp-block-gutenberg-interactive-counter-js__increment').click(() => {
		const currentValue = parseInt($input.val())
		$input.val(currentValue + step)
	})
	jQuery('.wp-block-gutenberg-interactive-counter-js__decrement').click(() => {
		const currentValue = parseInt($input.val())
		$input.val(currentValue - step)
	});
});
