jQuery(document).ready(function($) {

	"use strict";

	/* Galeria */
	jQuery("#nanoGallery").nanoGallery({
		userID: '98903715@N02',
		kind: 'flickr',
		photoset: 'none',

		thumbnailWidth: 106,
		thumbnailHeight: 106,
		thumbnailHoverEffect: 'scaleLabelOverImage,borderDarker',
		thumbnailLabel: { display:true, position:'overImageOnMiddle', align:'center' },
		thumbnailLazyLoad: true,

		theme: 'default',
		paginationMaxLinesPerPage: 3,
		maxWidth: 360,

		i18n: {
			paginationPrevious: 'Anterior', paginationPrevious_US: 'Previous',
			paginationNext: 'Próximo', paginationNext_US: 'Next'
		}
	});

});