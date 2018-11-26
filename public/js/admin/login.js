$(function () {
    <!-- Demo page code -->
    var match = document.cookie.match(new RegExp('color=([^;]+)'));
    if (match) var color = match[1];
    if (color) {
        $('body').removeClass(function (index, css) {
            return (css.match(/\btheme-\S+/g) || []).join(' ')
        })
        $('body').addClass('theme-' + color);
    }

    $('[data-popover="true"]').popover({html: true});

    var uls = $('.sidebar-nav > ul > *').clone();
    uls.addClass('visible-xs');
    $('#main-menu').append(uls.clone());

    $("[rel=tooltip]").tooltip();
    $(function () {
        $('.demo-cancel-click').click(function () {
            return false;
        });
    });

});