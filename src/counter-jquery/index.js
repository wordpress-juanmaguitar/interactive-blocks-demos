import './index.css';
import './style.css';
import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType( 'gutenberg-interactive/counter-jquery', {
	edit: Edit,
	save: Save,
} );
