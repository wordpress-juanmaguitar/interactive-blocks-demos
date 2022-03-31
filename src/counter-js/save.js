import { useBlockProps } from '@wordpress/block-editor';

const Save = ( { attributes } ) => (
	<div { ...useBlockProps.save() }>
		<div>{ attributes.initial }</div>
		<button className="wp-block-gutenberg-interactive-counter-js__increment">
			+
		</button>
		<button className="wp-block-gutenberg-interactive-counter-js__decrement">
			-
		</button>
	</div>
);

export default Save;
