import { useBlockProps } from '@wordpress/block-editor';

const Save = ( { attributes } ) => {
	return (
		<div
			{ ...useBlockProps.save() }
			data-gutenberg-attributes={ JSON.stringify( attributes ) }
		>
			<button>+</button>
			<input
				width="5"
				type="number"
				readOnly
				value={ attributes.initial }
			/>
			<button>-</button>
		</div>
	);
};

export default Save;
