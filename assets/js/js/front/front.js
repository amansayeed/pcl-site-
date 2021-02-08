jQuery(window).scroll(function() {
    if ($(this).scrollTop() > 80) {
        jQuery(".header").addClass('animate')
        jQuery(".header").animate({
            backgroundColor: 'rgba(255,255,255,0.9)'
        }, 50);
        jQuery(".header").attr("title", "drop")
    }
    jQuery(".header").attr("title", "drop")
});
jQuery(window).scroll(function() {
    if ($(this).scrollTop() < 80) {
        jQuery(".header").removeClass('animate')
        jQuery(".header").animate({
            backgroundColor: 'rgba(0,0,0,0)'
        }, 50);
        jQuery(".header").attr("title", "")
    }
});

function selectvelue() {
    if (jQuery("#dropvelue").css("display") == "none") {
        jQuery("#dropvelue").slideDown(100)
    } else {
        jQuery("#dropvelue").slideUp(100)
    }
}
jQuery(document).ready(function() {
    jQuery('#scroll-service').click(function() {
        jQuery("html, body").animate({
            scrollTop: $('#services').offset().top
        }, 1000);
    });
    jQuery('#request-qt').click(function() {
        jQuery("html, body").animate({
            scrollTop: $('#RequestFreeAnalysis').offset().top
        }, 1000);
    });
    $('#home-video-first img').click(function(e) {
        $('.mask-opening').show();
        $('.modal-opening').css({
            'transform': 'scale(1)',
            'transition': 'all 0.5s',
            '-webkit-transform': 'scale(1)',
            '-webkit-transition': 'all 0.5s',
            '-moz-transform': 'scale(1)',
            '-moz-transition': 'all 0.5s',
            '-o-transform': 'scale(1)',
            '-o-transition': 'all 0.5s'
        });
    });
    $('.close-opening').click(function(e) {
        $('.mask-opening').hide();
        $('.modal-opening').css({
            'transform': 'scale(0)',
            'transition': 'all 0.5s',
            '-webkit-transform': 'scale(0)',
            '-webkit-transition': 'all 0.5s',
            '-moz-transform': 'scale(0)',
            '-moz-transition': 'all 0.5s',
            '-o-transform': 'scale(0)',
            '-o-transition': 'all 0.5s'
        });
        $('#video-first')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    });
    $('#home-video-second img').click(function(e) {
        $('.mask-opening-two').show();
        $('.modal-opening-two').css({
            'transform': 'scale(1)',
            'transition': 'all 0.5s',
            '-webkit-transform': 'scale(1)',
            '-webkit-transition': 'all 0.5s',
            '-moz-transform': 'scale(1)',
            '-moz-transition': 'all 0.5s',
            '-o-transform': 'scale(1)',
            '-o-transition': 'all 0.5s'
        });
    });
    $('.close-opening').click(function(e) {
        $('.mask-opening-two').hide();
        $('.modal-opening-two').css({
            'transform': 'scale(0)',
            'transition': 'all 0.5s',
            '-webkit-transform': 'scale(0)',
            '-webkit-transition': 'all 0.5s',
            '-moz-transform': 'scale(0)',
            '-moz-transition': 'all 0.5s',
            '-o-transform': 'scale(0)',
            '-o-transition': 'all 0.5s'
        });
        $('#video-second')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    });
    jQuery(".nav ul li").mouseover(function() {
        jQuery("#blueback").show()
    })
    jQuery(".nav ul li").mouseout(function() {
        jQuery("#blueback").hide()
    })
    jQuery(".hideblock").mouseover(function() {
        jQuery("#blueback").hide()
    })
});
jQuery(document).ready(function() {
    jQuery(".animate1").mouseover(function() {
        if (jQuery(".header").attr("title") == "drop") {
            jQuery(".header").addClass('animate1')
        }
    });
    jQuery(".animate1").mouseleave(function() {
        jQuery(".header").removeClass('animate1')
    });
    setInterval(function() {
        var windowheight = jQuery(window).height();
        var bannerheight = jQuery(".home-banner").height();
        var middletext = jQuery(".home-banner .middletext").height();
        var middlespace = bannerheight - middletext;
        var middlespace1 = middlespace / 2
        jQuery(".home-banner").css("height", windowheight + "px")
        jQuery(".home-banner .middletext").css("margin-top", middlespace1 + 50 + "px")
    }, 100)
    jQuery(".down img").click(function() {
        var windowwidth = jQuery(window).width();
        var bannerheight = jQuery(".home-banner").height();
        var toolsheight = jQuery(".tools").height();
        var location = bannerheight + toolsheight;
        if (windowwidth > 1370) {
            jQuery("html, body").animate({
                scrollTop: location - 90 + "px"
            }, 800)
        }
        if (windowwidth < 1370) {
            jQuery("html, body").animate({
                scrollTop: bannerheight - 80 + "px"
            }, 800)
        }
    })
});
$(document).ready(function() {
    jQuery(".header .menu .nav ul li span").click(function() {
        var menuid = jQuery(this).attr("id");
        if (jQuery("#" + menuid).next("ol").css("display") == "none") {
            jQuery(".header .menu .nav ul li span").html("+")
            jQuery(this).html("-")
            jQuery(".header .menu .nav ul li ol").slideUp(600)
            jQuery("#" + menuid).next("ol").slideDown(600)
        } else {
            jQuery(".header .menu .nav ul li ol").slideUp(600)
            jQuery(".header .menu .nav ul li span").html("+")
        }
    })
    jQuery(".header .menu .nav ul li ol ul li").click(function() {
        var submenuid = jQuery(this).attr("id");
        if (jQuery("#" + submenuid).find("ul").css("display") == "none") {
            jQuery(".header .menu .nav ul li ol ul li strong").html("+")
            jQuery(".header .menu .nav ul li ol ul li ul").slideUp(600)
            jQuery("#" + submenuid).find("ul").slideDown(600)
            jQuery("#" + submenuid).children("strong").html("-")
        } else {
            jQuery(".header .menu .nav ul li ol ul li ul").slideUp(600)
            jQuery(".header .menu .nav ul li ol ul li strong").html("+")
        }
    })
});

function mobilelink() {
    if (jQuery(".header .menu").attr("name") == "menu") {
        jQuery(".header .menu").slideDown(400);
        jQuery(".mobile-icon ul li").eq(1).css("display", "none");
        jQuery(".mobile-icon").addClass("active");
        jQuery(".header .menu").attr("name", "menu1")
    } else {
        jQuery(".header .menu").attr("name", "menu")
        jQuery(".header .menu").slideUp(400);
        jQuery(".mobile-icon").removeClass("active");
        jQuery(".mobile-icon ul li").eq(1).css("display", "block");
    }
}
$(document).on('keydown', function(e) {
    if (e.keyCode === 27) {
        $('.mask-opening,.mask-opening-two').hide();
        $('.modal-opening,.modal-opening-two').css({
            'transform': 'scale(0)',
            'transition': 'all 0.5s',
            '-webkit-transform': 'scale(0)',
            '-webkit-transition': 'all 0.5s',
            '-moz-transform': 'scale(0)',
            '-moz-transition': 'all 0.5s',
            '-o-transform': 'scale(0)',
            '-o-transition': 'all 0.5s'
        });
    }
});