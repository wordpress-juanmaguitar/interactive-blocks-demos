import { useBlockProps } from '@wordpress/block-editor';

const Save = ( { attributes } ) => {
	return (
		<div { ...useBlockProps.save() }>
			<pre>{ JSON.stringify( attributes, null, 2 ) }</pre>
			<gutenberg-counter
				value={ attributes.initial }
				increment={ attributes.increment }
			>
				<button className="wp-block-gutenberg-interactive-counter-web-component__increment">
					+
				</button>
				<input
					value={ attributes.initial }
					className="wp-block-gutenberg-interactive-counter-web-component__value"
				/>
				<button className="wp-block-gutenberg-interactive-counter-web-component__decrement">
					-
				</button>
			</gutenberg-counter>
		</div>
	);
};

export default Save;
