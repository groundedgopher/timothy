/**
 * Created by tsmith on 3/19/2016.
 */


var i = 0;
$('html').on ('DOMMouseScroll', function (e) {
    var delta = e.originalEvent.detail;
    var currentWidth = document.getElementById('titleImage').offsetWidth;
    if (delta < 0) {
        i = (i<24) ? i + 2 : i;
        $('#titleImage').width(currentWidth - (currentWidth * (i/100)));
    } else if (delta > 0) {
        i = (i>=6) ? i - 2 : i;
        if (i>12) {
            $('#titleImage').width(currentWidth + (currentWidth * i / 100));
        }
    }
    $('#titleImage').css({'opacity':(( 100 - (4 * i) )/100) +.1});
});

$('html').on ('mousewheel', function (e) {
    var delta = e.originalEvent.wheelDelta;
    var currentWidth = document.getElementById('titleImage').offsetWidth;
    if (delta < 0) {
        i = (i<24) ? i + 2 : i;
        $('#titleImage').width(currentWidth - (currentWidth * (i/100)));
    } else if (delta > 0) {
        i = (i>=6) ? i - 2 : i;
        if (i>12) {
            $('#titleImage').width(currentWidth + (currentWidth * i / 100));
        }
    }
    $('#titleImage').css({'opacity':(( 100 - (4 * i) )/100) +.1});
});