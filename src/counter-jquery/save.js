import { useBlockProps } from '@wordpress/block-editor';

const Save = ( { attributes } ) => {
	return (
		<div { ...useBlockProps.save() }>
			<pre>
				jQuery Counter
				{ JSON.stringify(attributes, null, 2)}
			</pre>
			<button className="wp-block-gutenberg-interactive-counter-jquery__decrement">
				-
			</button>
			<input width="5" step={ attributes.increment } type="number" className="wp-block-gutenberg-interactive-counter-jquery__value" value={ attributes.initial } />
			<button className="wp-block-gutenberg-interactive-counter-jquery__increment">
				+
			</button>
			
		</div>
	);
}

export default Save;
