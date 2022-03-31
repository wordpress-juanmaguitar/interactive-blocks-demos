/* This JS is only used in the editor. */

import { registerBlockType } from '@wordpress/blocks';
import { useContext } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import { calendar as icon } from '@wordpress/icons';

import edit from './edit';
import save from './save';
import { Context } from './context';

registerBlockType('gutenberg-interactive/date-countdown', {
	icon,
	category: 'gutenberg-interactive-blocks',
	edit,
	save,
});

registerBlockType('gutenberg-interactive/countdown-days', {
	icon,
	category: 'gutenberg-interactive-blocks',
	title: 'Days',
	edit: function BlockEdit() {
		const { dd } = useContext(Context);
		return dd || null;
	},
	save: () => {
		return '{{dd}}';
	},
});

registerBlockType('gutenberg-interactive/countdown-hours', {
	icon,
	category: 'gutenberg-interactive-blocks',
	title: __('Hours', 'gutenberg-interactive'),
	edit: function BlockEdit() {
		const { hh } = useContext(Context);
		return hh || null;
	},
	save: () => {
		return '{{hh}}';
	},
});

registerBlockType('gutenberg-interactive/countdown-minutes', {
	icon,
	category: 'gutenberg-interactive-blocks',
	title: __('Minutes', 'gutenberg-interactive'),
	edit: function BlockEdit() {
		const { mm } = useContext(Context);
		return mm || null;
	},
	save: () => {
		return '{{mm}}';
	},
});

registerBlockType('gutenberg-interactive/countdown-seconds', {
	icon,
	category: 'gutenberg-interactive-blocks',
	title: __('Seconds', 'gutenberg-interactive'),
	edit: function BlockEdit() {
		const { ss } = useContext(Context);
		return ss || null;
	},
	save: () => {
		return '{{ss}}';
	},
});
