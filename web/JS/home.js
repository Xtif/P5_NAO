/*          on scroll effects         */

$(window).scroll(function() {

    var $wScroll = $(this).scrollTop();

    $('#header-section-content').css({

        'transform' : 'translate(0px, '+ $wScroll / 9 +'%)'

    });

    if($(window).width() > 992) {

        if($wScroll > $('#ccm').offset().top - $(window).height()) {

            var $offset = Math.min(0, $wScroll -  $('#ccm').offset().top + $(window).height() - 500);

            $('#ccm-section-search-box').css({

                'transform': 'translate('+ $offset +'px, '+ Math.abs($offset * 0.2) +'px)'

            })

            $('#ccm-section-participate-box').css({

                'transform': 'translate('+ Math.abs($offset) +'px, '+ Math.abs($offset * 0.2) +'px)'

            })

        }

    } else if($(window).width() < 992) {

        if($wScroll > $('#ccm').offset().top - $(window).height() / 1.6) {

            $('#ccm').children().each(function(i) {

                setTimeout(function() {

                    $('#ccm').children().eq(i).addClass('is-showing');

                }, 150 * (i + 1));

            });

        } else {

            $('#ccm').children().each(function(i) {

                setTimeout(function() {

                    $('#ccm').children().eq(i).removeClass('is-showing');

                }, 150 * (i + 1));

            });

        }

    }

    if($wScroll > $('#qsn').offset().top - $(window).height() / 1.6) {

        $('#qsn').children().each(function(i) {

            setTimeout(function() {

                $('#qsn').children().eq(i).addClass('is-showing');

            }, 150 * (i + 1));

        });

    } else {

        $('#qsn').children().each(function(i) {

            setTimeout(function() {

                $('#qsn').children().eq(i).removeClass('is-showing');

            }, 150 * (i + 1));

        });

    }

});

/*          on click effects          */

$(function() {

    $('.ccm').on('click', function(e) {

        $('body, html').animate({

            scrollTop: $('#ccm').offset().top - 100

        }, 1300);

    });

    $('.qsn').on('click', function(e) {

        $('body, html').animate({

            scrollTop: $('#qsn').offset().top

        }, 1300);

    });

});
