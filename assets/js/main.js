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
		paginationMaxLinesPerPage: 2,
		maxWidth: 720,

		i18n: {
			paginationPrevious: 'Anterior', paginationPrevious_US: 'Previous',
			paginationNext: 'Próximo', paginationNext_US: 'Next'
		}
	});

    $("body").niceScroll({
        cursorcolor:"rgba(0,0,0,0.8)",
        cursorwidth: "7px",
        cursorborder: "1px solid #000",
        cursorborderradius: "0",
        autohidemode: false,
        scrollspeed: 50,
       	horizrailenabled: false
  	});

});