(function ($) {
    $(function () {

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space
(function ($) {

    'use strict';

    var $filters = $('.filter [data-filter]'),
        $boxes = $('.boxes [data-category]');

    $filters.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);

        $filters.removeClass('selected');
        $this.addClass('selected');

        var $filterColor = $this.attr('data-filter');

        if ($filterColor == 'all') {
            $boxes.removeClass('is-animated')
                .fadeOut().promise().done(function () {
                    $boxes.addClass('is-animated').fadeIn();
                });
        } else {
            $boxes.removeClass('is-animated')
                .fadeOut().promise().done(function () {
                    $boxes.filter('[data-category = "' + $filterColor + '"]')
                        .addClass('is-animated').fadeIn();
                });
        }
    });

})(jQuery);
