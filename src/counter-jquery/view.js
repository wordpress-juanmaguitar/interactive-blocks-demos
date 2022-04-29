window.addEventListener( 'load', () => {
	const $ = jQuery;
	const blockClassPrefix = '.wp-block-gutenberg-interactive-counter-jquery'
	const $input = $(blockClassPrefix + '__value');
	const step = parseInt($input.attr("step"))

	$(blockClassPrefix + '__increment').click(() => {
		const currentValue = parseInt($input.val())
		$input.val(currentValue + step)
	})
	$(blockClassPrefix + '__decrement').click(() => {
		const currentValue = parseInt($input.val())
		$input.val(currentValue - step)
	});
});
