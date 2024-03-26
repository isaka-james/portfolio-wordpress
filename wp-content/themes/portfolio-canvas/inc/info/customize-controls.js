( function( api ) {

	// Extends our custom "portfolio-canvas-pro" section.
	api.sectionConstructor['portfolio-canvas-pro'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
