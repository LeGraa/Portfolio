( function( api ) {

	// Extends our custom "webart" section.
	api.sectionConstructor['webart'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
