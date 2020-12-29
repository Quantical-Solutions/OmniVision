$('#owl-1').owlCarousel({
    loop:true,
    margin:0,
    items:1,
    dots: true,
    navText: [
        '<svg viewBox="0 0 20 20"><path d="M12.452 4.516c0.446 0.436 0.481 1.043 0 1.576l-3.747 3.908 3.747 3.908c0.481 0.533 0.446 1.141 0 1.574-0.445 0.436-1.197 0.408-1.615 0-0.418-0.406-4.502-4.695-4.502-4.695-0.223-0.217-0.335-0.502-0.335-0.787s0.112-0.57 0.335-0.789c0 0 4.084-4.287 4.502-4.695s1.17-0.436 1.615 0z"></path></svg>',
        '<svg viewBox="0 0 20 20"><path d="M9.163 4.516c0.418 0.408 4.502 4.695 4.502 4.695 0.223 0.219 0.335 0.504 0.335 0.789s-0.112 0.57-0.335 0.787c0 0-4.084 4.289-4.502 4.695-0.418 0.408-1.17 0.436-1.615 0-0.446-0.434-0.481-1.041 0-1.574l3.747-3.908-3.747-3.908c-0.481-0.533-0.446-1.141 0-1.576s1.197-0.409 1.615 0z"></path></svg>'
    ],
    responsiveClass:true,
    responsive:{
        0:{
            nav:false
        },
        640:{
            nav:true
        }
    }
})

var scroll = document.querySelector('#scroll-to-top');

if (scroll) {

    var height = window.innerHeight;
    var btn = $(scroll);

    $(window).scroll(function () {
        if ($(window).scrollTop() > height) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, height);
    });

    stickyHeader();

    window.onscroll = function() {
        stickyHeader();
    };
}

function stickyHeader() {

    var header = document.querySelector('nav'),
        sticky = window.innerHeight - (window.innerHeight/4);

    if (window.pageYOffset > sticky) {

        header.classList.add("sticky");
        setTimeout(function(){
            header.classList.add("stickySticky");
        }, 150);

    } else {

        header.classList.remove("stickySticky");
        setTimeout(function(){
            header.classList.remove("sticky");
        }, 150);
    }
}