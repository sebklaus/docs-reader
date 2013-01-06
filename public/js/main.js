/**
 * Apply google prettyprint to all <pre> elements within the
 * documentation.
 */
jQuery(document).ready(function($)
{
	$('.documentation pre').addClass('prettyprint');
	prettyPrint();
});
