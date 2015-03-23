$(function () {
    var pass1 = $('#txtPassword'),
    arrow = $('.arrow');;
    pass1.complexify({minimumChars: 6, strengthScaleFactor: 0.7}, function (valid, complexity) {

        if (valid) {
            pass1.parent()
                    .removeClass('error')
                    .addClass('success');
        }
        else {
            pass1.parent()
                    .removeClass('success')
                    .addClass('error');
        }

        var calculated = (complexity / 100) * 268 - 134;
        var prop = 'rotate(' + (calculated) + 'deg)';

        // Rotate the arrow. Additional rules for different browser engines.
        arrow.css({
            '-moz-transform': prop,
            '-webkit-transform': prop,
            '-o-transform': prop,
            '-ms-transform': prop,
            'transform': prop
        });
    });
});