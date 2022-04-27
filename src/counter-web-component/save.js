import { useBlockProps } from '@wordpress/block-editor';

const Save = ( { attributes } ) => {
	return (
		<div { ...useBlockProps.save() }>
			<gutenberg-counter
				value={ attributes.initial }
				increment={ attributes.increment }
			></gutenberg-counter>
		</div>
	);
};

export default Save;
