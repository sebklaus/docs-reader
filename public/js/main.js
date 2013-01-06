/**
 * Apply google prettyprint to all <pre> elements within the
 * documentation.
 */
jQuery(document).ready(function($)
{
	$('.content pre').addClass('prettyprint');
	prettyPrint();
});
