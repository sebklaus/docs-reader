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
    // Remove <em> tag  and add divider class to its parent
    $('aside.sidebar li em').contents().unwrap().parent().addClass('divider');
    // Remove <strong> tag and add nav-header class to its parent
    $('aside.sidebar li strong').contents().unwrap().parent().addClass('nav-header').prepend('<i class="icon-folder-open"></i>');
    // Open all external links in a new window/ tab
    $('a[href^="http://"]').attr({target:"_blank", title:"Opens in a new window"});
    // Make tables look nice
    $('.content table').addClass('table table-striped table-condensed table-bordered');
});
