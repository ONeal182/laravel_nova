$(document).ready(function() {
    var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
    
    (function(){
        var counter = 0;
        setTimeout(function(){
        counter++;
        gtag('event', 'view_15_seconds', {'event_category' : 'engagement', 'event_label' : (counter * 15) + ' seconds'});
        }, 15000);
    })();
});
function scrollNav() {
    $('.menu-item a').click(function () {
        $('.active').removeClass('active');
        $(this).closest('li').addClass('active');
        var theClass = $(this).attr('class');
        $('.' + theClass).parent('li').addClass('active');
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 800);
        return false;
    });
    $('.scrollTop a').scrollTop();
}
scrollNav();
$('.prizes-link button').click(function(){
    $('.popup-prodomocode').show();
});
$('.popup-close').click(function(){
    $('.popup-prodomocode').hide();
});
$('.navbar-open').click(function(){
    $('html').addClass('no-scroll');
    $('.navbar-menu').addClass('active');
});
$('.navbar-close').click(function(){
    $('html').removeClass('no-scroll');
    $('.navbar-menu').removeClass('active');
});
$('.nav-item span').click(function(){
    $(this).toggleClass('active');
    $(this).parent().find('.nav-child').toggleClass('active');
});
var interleaveOffset = 0.5;

function goToByScroll(id){
    id = id.replace('link', '');
    $('html,body').animate({
        scrollTop: $('#'+id).offset().top},
        'slow');
}
$('.offer-item-block').click(function(e) {
    e.preventDefault();
    goToByScroll($(this).attr('data-id'));
});

var product = new Swiper('.carousel1', {
    autoplay: {
        delay: 5000,
    },
    slidesPerView: 1,
    pagination: {
        el: '.pagination1',
        clickable: true,
    },
    navigation: {
        nextEl: '.next1',
        prevEl: '.prev1',
    },
});

var product = new Swiper('.carousel2', {
    // autoplay: {
    //     delay: 5000,
    // },
    slidesPerView: 'auto',
    pagination: {
        el: '.pagination2',
        clickable: true,
    },
    spaceBetween: 12,
    navigation: {
        nextEl: '.next2',
        prevEl: '.prev2',
    },
});

$('.header-discount-block a').click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $('#discount').offset().top
    }, 600);
});

$('.offer').click(function() {
    var active = $(this).hasClass('active');
    $('.offer').removeClass('active');
    if (!active) {
        $(this).addClass('active');
    }
}).on('click', '.coupone, button, a', function(e){
    e.stopPropagation();
});

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}