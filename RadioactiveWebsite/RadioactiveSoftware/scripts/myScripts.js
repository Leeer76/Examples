$(document).ready(function () {
    //mobile responsive
    var w = $(window).width();
    if (w <= 800) {
        $('.inlineLogo').after('<div class="ham"><img class="hamburger" src="RadioactiveSoftware/images/hamburger.png"></div>');
    }

    $('.hamburger').click(function () {
        $('.inlineList').slideToggle();
    });

    //keep copyright in footer current
    $(function () {
        var thisYear = (new Date()).getFullYear();
        $('.year').text(thisYear);
    }); 

    //products hover/click functionality

    //******hover*****
    if (w <= 800 && w > 700) {
        $('#football').hover(function () {
            $('#reactor').css("height", "200px");
            $('#fallout').css("height", "200px");
        }, function () {
            $('.product').css("height", "250px");
        });

        $('#reactor').hover(function () {
            $('#football').css("height", "200px");
            $('#fallout').css("height", "200px");
        }, function () {
            $('.product').css("height", "250px");
        });

        $('#fallout').hover(function () {
            $('#football').css("height", "200px");
            $('#reactor').css("height", "200px");
        }, function () {
            $('.product').css("height", "250px");
        });
    } else if (w <= 700 && w > 360) {
        $('#football').hover(function () {
            $('#reactor').css("height", "100px");
            $('#fallout').css("height", "100px");
        }, function () {
            $('.product').css("height", "150px");
        });

        $('#reactor').hover(function () {
            $('#football').css("height", "100px");
            $('#fallout').css("height", "100px");
        }, function () {
            $('.product').css("height", "150px");
        });

        $('#fallout').hover(function () {
            $('#football').css("height", "100px");
            $('#reactor').css("height", "100px");
        }, function () {
            $('.product').css("height", "150px");
        });
    } else if (w <= 360) {
        $('#football').hover(function () {
            $('#reactor').css("height", "75px");
            $('#fallout').css("height", "75px");
        }, function () {
            $('.product').css("height", "100px");
        });

        $('#reactor').hover(function () {
            $('#football').css("height", "75px");
            $('#fallout').css("height", "75px");
        }, function () {
            $('.product').css("height", "100px");
        });

        $('#fallout').hover(function () {
            $('#football').css("height", "75px");
            $('#reactor').css("height", "75px");
        }, function () {
            $('.product').css("height", "100px");
        });
    } else {
        $('#football').hover(function () {
            $('#reactor').css("height", "300px");
            $('#fallout').css("height", "300px");
        }, function () {
            $('.product').css("height", "350px");
        });

        $('#reactor').hover(function () {
            $('#football').css("height", "300px");
            $('#fallout').css("height", "300px");
        }, function () {
            $('.product').css("height", "350px");
        });

        $('#fallout').hover(function () {
            $('#football').css("height", "300px");
            $('#reactor').css("height", "300px");
        }, function () {
            $('.product').css("height", "350px");
        });
    }
   

    //******click*****

    //specs and descript arrays

    var $n = ["Nuclear Football Classic Edition", "Reactor Meltdown", "Nuclear Fallout Springfield Edition"];
    var $d = ["Nuclear Football was our first client server package and holds a special place in all our hearts. It's robust and able to handle anything your current system needs. We've recently made a few updates but it remains the same classic you're use to.",
              "Reactor Meltdown is our newest client server package which is designed to make your business run like a high yeilding Nuclear Reactor... which will make your company's stock prices as hot as a Meltdown.",
              "Nuclear Fallout is our economy editon of our client server software, sure it's not as robust as Nuclear Football or Reactor but it does what you need it to do for a price that will fit any budget."];
    var $s = [["20,000", "Windows", "15GB", "Intel i5", "64MB", "Radeon 5450", "64GB Available"], ["10,000", "Windows", "10GB", "Intel i5", "32MB", "Radeon 5450", "32GB Available"], ["10,000", "Windows", "10GB", "Intel i5", "16MB", "Redeon 5450", "16GB Available"]];


    $('#football').click(function () {
        $('.prodName').show();
        $('#productDetail').show();
        $('.prodName').text($n[0]);
        $('#desc').text($d[0]);
        $('.left').each(function (i) {
            $(this).text($s[0][i]);
        });
    });

    $('#reactor').click(function () {
        $('.prodName').show();
        $('#productDetail').show();
        $('.prodName').text($n[1]);
        $('#desc').text($d[1]);
        $('.left').each(function (i) {
            $(this).text($s[1][i]);
        });
    });

    $('#fallout').click(function () {
        $('.prodName').show();
        $('#productDetail').show();
        $('.prodName').text($n[2]);
        $('#desc').text($d[2]);
        $('.left').each(function (i) {
            $(this).text($s[2][i]);
        });
    });


});


//slider action
$(function () {
    var width = $('.sliderItem img').width();
        var timing = 500;
        var pause = 3500;
        var currentSlide = 1;
        var l = $('.sliderItem').length;

    //cache dom
    var $slider = $('#slider');
    var $sliderContainer = $slider.find('.sliderItems');
    var $slides = $sliderContainer.find('.slderItem');

    var interval;

    function startSlider() {
        interval = setInterval(function () {
            $sliderContainer.animate({ 'margin-left': '-=' + width }, timing, function () {
                currentSlide++;
                if (currentSlide === l) {
                    currentSlide = 1;
                    $sliderContainer.css({ 'margin-left': 0 });
                }
            });
        }, pause);
    }

    function stopSlider() {
        clearInterval(interval);
    }
    $slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);

    startSlider();

});

