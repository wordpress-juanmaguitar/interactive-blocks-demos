class GutenbergCounter extends HTMLElement {
	connectedCallback() {
		if ( ! this.hasAttribute( 'value' ) ) {
			this.setAttribute( 'value', 0 );
		}
		if ( ! this.hasAttribute( 'increment' ) ) {
			this.setAttribute( 'increment', 1 );
		}
		setTimeout( () => {
			this.increment = this.querySelector(
				'.wp-block-gutenberg-interactive-counter-web-component__increment'
			);
			this.decrement = this.querySelector(
				'.wp-block-gutenberg-interactive-counter-web-component__decrement'
			);
			this.value = this.querySelector(
				'.wp-block-gutenberg-interactive-counter-web-component__value'
			);

			this.increment.addEventListener( 'click', () => {
				const oldValue = parseInt( this.getAttribute( 'value' ), 10 );
				const increment = parseInt(
					this.getAttribute( 'increment' ),
					10
				);
				this.setAttribute( 'value', oldValue + increment );
				this.replaceValue();
			} );
			this.decrement.addEventListener( 'click', () => {
				const oldValue = parseInt( this.getAttribute( 'value' ), 10 );
				const increment = parseInt(
					this.getAttribute( 'increment' ),
					10
				);
				this.setAttribute( 'value', oldValue - increment );
				this.replaceValue();
			} );
		} );
	}

	attributeChangedCallback( name, oldValue, newValue ) {
		if ( name === 'value' && newValue !== oldValue ) {
			this.setAttribute( 'value', newValue );
			this.replaceValue();
		}
	}

	replaceValue() {
		this.value.value = this.getAttribute( 'value' );
	}
}

window.customElements.define( 'gutenberg-counter', GutenbergCounter );
