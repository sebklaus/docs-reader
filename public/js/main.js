/**
 * Apply google prettyprint to all <pre> elements within the
 * documentation.
 */
jQuery(document).ready(function($)
{
    // Make code look nice
    $('.content pre, table code').addClass('prettyprint');
    prettyPrint();
    // Add Twitter Bootstrap related classes to HTML tags
    $('aside.sidebar ul').addClass('nav nav-list');
    $('.content blockquote').addClass('alert alert-info');
});
