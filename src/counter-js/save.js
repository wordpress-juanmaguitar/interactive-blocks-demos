import { useBlockProps } from '@wordpress/block-editor';

const Save = ( { attributes } ) => {
	const {initial: initialValue} = { attributes }
	console.log(initialValue)
	return (
		<div { ...useBlockProps.save() }>
			<p>11:29</p>
			<pre>
			{ JSON.stringify(attributes, null, 2)}
			</pre>
			<pre>
			-- { initialValue } --
			</pre>
			<button className="wp-block-gutenberg-interactive-counter-js__increment">
				+
			</button>
			<input value={ initialValue } />
			<button className="wp-block-gutenberg-interactive-counter-js__decrement">
				-
			</button>
		</div>
	);
}

export default Save;
