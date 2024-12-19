//event pada saat link di klik
$('.page-scroll').on('click', function(event){

    // ambil isi href
    var tujuan = $(this).attr('href');
    // tangkap elemen ybs
    var elemenTujuan = $(tujuan);

    //pindahkan scroll
    $('html, body').animate({
        scrollTop: elemenTujuan.offset().top - 50
    }, 1250, 'easeInOutExpo');

    event.preventDefault();
    
});



$(window).scroll(function() {
    var wScroll = $(this).scrollTop();

    // navbar
    // if( wScroll > $('.navbar').offset().top - 300 ){
    //     $('.navbar').addClass('navbar-change-color');
    //     console.log('oke');
    // }

});

// slide untuk data pendidik

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

// akhir slide