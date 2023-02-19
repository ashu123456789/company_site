AOS.init({
    delay: 50,
    duration: 1250,
})

/* Mobile Screen slider */
$('.solution-devices-slide').slick({
    infinite: true,
    slidesToShow: 5,
    infinite: true,
    slide: 'div',
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500,
    dots: true,
    responsive: [{
        breakpoint: 1199,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 1024,
        settings: {
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 768,
        settings: {
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 600,
        settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
});


$(document).ready(function () {
    /* faq */
    var pagename = $('.getpagename').attr("data-id");
    $.ajax({
        type: 'GET',
        url: "faq/" + pagename,
        success: function (data) {
            //console.log(data);
            $data = $(data);
            $('#item-container').html(data.html);
        },
        error: function () {
            console.log(data);
        }
    });
});