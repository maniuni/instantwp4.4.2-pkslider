jQuery(function($) {
	$('#fullpage').fullpage({
		anchors: ['1', '2', '3', '4'],
		fixedElements: 'footer',
		paddingBottom: '30px',
		fitToSection: false,
		scrollOverflow: true
	});
});