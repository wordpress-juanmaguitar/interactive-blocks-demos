import './index.css';
import './style.css';
import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType( 'gutenberg-interactive/counter-js', {
	edit: Edit,
	save: Save,
} );
