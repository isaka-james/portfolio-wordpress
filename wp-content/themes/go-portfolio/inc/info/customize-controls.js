( function( api ) {

	// Extends our custom "go-portfolio-pro" section.
	api.sectionConstructor['go-portfolio-pro'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
