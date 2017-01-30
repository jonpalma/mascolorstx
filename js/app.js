$(window).scroll(function () {
    if ($(window).scrollTop() >= '115' && !$('.navbar').hasClass('navbar-fixed-top'))
    {
        $('.navbar').addClass('navbar-fixed-top');
    }
    else if ($(window).scrollTop() < '115' && $('.navbar').hasClass('navbar-fixed-top'))
    {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$('.navbar-nav li').click(function() {
    $('.navbar-nav li').removeClass('active');
    $(this).addClass('active');
});

$('li.dropdown a').on('click', function (event) {
    $('li.dropdown.dropdown-submenu').removeClass('open');
    $(this).parent().toggleClass('open');
});

$('body').on('click', function (e) {
    if (!$('li.dropdown').is(e.target) 
        && $('li.dropdown').has(e.target).length === 0 
        && $('.open').has(e.target).length === 0)
    {
        $('li.dropdown').removeClass('open');
    }
});

$("#bttnMapa").click(function() {
    $(this).find("iframe").css('pointer-events', 'all');
});