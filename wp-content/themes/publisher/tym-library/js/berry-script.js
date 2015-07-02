jQuery(document).ready(function ($) {
    
    // Customize Related Posts (Jetpack)
    // Change post date format
    var formatRelatedPostDate = setInterval(function () {
        if ($('#jp-relatedposts .jp-relatedposts-post-date').length > 0)
        {
            $('#jp-relatedposts .jp-relatedposts-post-date').each(function () {
                var dateFormat = $(this).text();
                var dateFormat = $.datepicker.formatDate('dd M yy', new Date(dateFormat));
                $(this).html(dateFormat);
            });
            clearInterval(formatRelatedPostDate);
        }
    }, 1000);
    
});