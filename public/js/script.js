
$(document).ready(function () {
  if ($(window).scrollTop() > 50) {
    $('#header').addClass('header-scrolled');
    $('#topbar').addClass('topbar-scrolled');
  } else {
    $('#header').removeClass('header-scrolled');
    $('#topbar').removeClass('topbar-scrolled');
  }
  // use for header scroll in all pages
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#header').addClass('header-scrolled');
      $('#topbar').addClass('topbar-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
      $('#topbar').removeClass('topbar-scrolled');
    }
  });

  // only use on home page
  $('.service-slide').slick({
    accessibility: true,
    arrows: true,
    infinite: true,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<a class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i> </a>',
    nextArrow: '<a class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i> </a>',
    responsive: [{
      breakpoint: 1199,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 375,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 320,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  // -------use in hybrid page and mobile app dev page---------
  $('.solution-slide').slick({
    accessibility: true,
    arrows: true,
    infinite: true,
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<a class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i> </a>',
    nextArrow: '<a class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i> </a>',
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 375,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 320,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  /* use on home page and solution pages */
  $(".portfolio-slider,.mobile-app-slide").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    // autoplaySpeed: 800,
    speed: 800,
    prevArrow:
      '<a class="slide-arrow-L d-flex align-items-center"><i class="d-block">&larr;</i><p class="mb-0 mt-1 ml-1">PREV</p></a>',
    nextArrow:
      '<a class="slide-arrow-R d-flex align-items-center"><p class="mb-0 mt-1 mr-1">NEXT</p><i class="d-block">&rarr;</i></a>',
  });
  // $('.portfolio-slider,.mobile-app-slide').slick({
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   arrows: true,
  //   autoplay: true,
  //   speed: 800,
  //   prevArrow: '<a class="slide-arrow-L"><img alt="left-arrow" title="left-arrow" class="mr-2" src="images/left-arrow.svg" aria-hidden="true">prev</a>',
  //   nextArrow: '<a class="slide-arrow-R">next<img alt="right-arrow(2)" title="right-arrow(2)" class="ml-2" src="images/right-arrow(2).png" aria-hidden="true"></a>',
  // });

  /* common testimonial Video*/
  $('.SL').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    prevArrow: '<a class="prevArrow"><img alt="Perivous" title="Perivous" src="https://deorwine.b-cdn.net/images/pic05.png" class="mr-2"></a>',
    nextArrow: '<a class="nextArrow"><img alt="Next" title="Next" src="https://deorwine.b-cdn.net/images/pic04.png" class="mr-2"></a>',
  });

  /* common testimonial text */
  $('.client-slide').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    prevArrow: '<a class="slide-arrow prev-arrow"><img src="images/left-arrow.png" class="img-fluid" alt=""> </a>',
    nextArrow: '<a class="slide-arrow next-arrow"><img src="images/right-arrow.png" class="img-fluid" alt=""> </a>',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
  });
  // $('.SL_1').slick({
  //     dots: true,
  //     infinite: false,
  //     // speed: 300,
  //     slidesToShow: 3,
  //     slidesToScroll: 3,
  // })


  /* only use on home page*/
  $('.portfolio-slide').slick({
    leftMode: true,
    swipe: true,
    swipeToSlide: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 3,
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
    },
    {
      breakpoint: 375,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 320,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  // use for new and article hover 
  // $(".news_card").hover(function () {
  //   $(this).find(".blue-card").toggle();
  // });

  // const btns = document.querySelectorAll(".acc-btn");
  // function accordion() {
  //   // this = the btn | icon & bg changed
  //   this.classList.toggle("is-open");

  //   // the acc-content
  //   const content = this.nextElementSibling;

  //   // IF open, close | else open
  //   if (content.style.maxHeight) content.style.maxHeight = null;
  //   else content.style.maxHeight = content.scrollHeight + "px";
  // }

  // btns.forEach((el) => el.addEventListener("click", accordion));


  // $('.nav-item').click(function () {
  //   // reset active class
  //   $('.nav-item').removeClass("active");
  //   // add active class to selected
  //   $(this).addClass("active");
  //   // return needed to make function work
  //   return false;
  // });


  // $(function () {
  //   // create an empty variable
  //   var selectedClass = "";
  //   // call function when item is clicked
  //   $(".nav-item").click(function () {
  //     // assigns class to selected item
  //     selectedClass = $(this).attr("data-rel");
  //     // fades out all portfolio items
  //     $(".portfolio-tab-section li").fadeOut(300);
  //     // fades in selected category
  //     $(".portfolio-tab-section li." + selectedClass).delay(300).fadeIn(300);
  //   });
  // });

  /* uncomment after check */
  // $('.tabs').on('click', 'a', function (e) {
  //   e.preventDefault();
  //   var tabId = $(this).attr('data-tab');
  //   $(this).closest('.tabs').find('a').removeClass('active');
  //   $(this).addClass('active');
  //   $('.tab-panel').removeClass('active');
  //   $('#' + tabId).addClass('active');
  // });

  /* blogs common */
  $.ajax({
    type: 'POST',
    url: "blogdata",
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    dataType: 'json',
    contentType: false,
    cache: false,
    processData: false,

    success: function (data) {
      //console.log(data);
      $data = $(data); // the HTML content that controller has produced
      $('#blog-container').html(data.html);
    }
  });


  $('.counter-count').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {

      //chnage count up speed here
      duration: 4000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now));
      }
    });
  });


  $("#enquireForm").on('submit', function (e) {
    // alert("hello");
    e.preventDefault();
    var fd = new FormData();
    var file_data = $('#input-file').prop('files')[0]; // for multiple files
    // for(var i = 0;i<file_data.length;i++){
    //     fd.append("file_"+i, file_data[i]);
    // }
    fd.append('file', file_data);
    var other_data = $('form#enquireForm').serializeArray();
    $.each(other_data, function (key, input) {
      fd.append(input.name, input.value);
    });
    $.ajax({
      type: 'POST',
      url: "enquire_form",
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      data: fd,
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $('#loader').show(); $('#loader').show();
        $("#enquiry").attr('disabled', true); // disable button
        // $('#fupForm').css("opacity",".5");
      },
      success: function (data) {
        $('#loader').hide();
        $("#enquiry").attr('disabled', false);
        if ($.isEmptyObject(data.error)) {
          $('.form-control').val('');
          $("span.error-text").hide();
          window.location = "thankyou";
        } else {
          printErrorMsg(data.error);
        }
      }
    });
  });
  function printErrorMsg(msg) {
    $("span.error-text").hide();
    $.each(msg, function (key, value) {
      $('.' + key + '_err5').text(value).show();
    });
  }

  $("#fupForm").on('submit', function (e) {
    // $("#fupForm").serialize()
    e.preventDefault();
    var fd = new FormData();
    var file_data = $('#input-file').prop('files')[0]; // for multiple files
    // for(var i = 0;i<file_data.length;i++){
    //     fd.append("file_"+i, file_data[i]);
    // }
    fd.append('file', file_data);
    var other_data = $('form#fupForm').serializeArray();
    $.each(other_data, function (key, input) {
      fd.append(input.name, input.value);
    });
    $.ajax({
      type: 'POST',
      url: "footer_form",
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      data: fd,
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $('#image').show(); $('#image').show();
        $("#footerform").attr('disabled', true); // disable button
        // $('#fupForm').css("opacity",".5");
      },
      success: function (data) {
        $('#image').hide();
        $("#footerform").attr('disabled', false);
        if ($.isEmptyObject(data.error)) {
          $('.form-control').val('');
          $("span.error-text").hide();
          window.location = "thankyou";
        }

        else {
          printErrorMsgfooter(data.error);
        }

      }
    });
  });
  function printErrorMsgfooter(msg) {
    $("span.error-text").hide();
    $.each(msg, function (key, value) {
      $('.' + key + '_err1').text(value).show();
    });
  }

  AOS.init({
    delay: 50,
    duration: 1250,
    once: true,
  })

});



