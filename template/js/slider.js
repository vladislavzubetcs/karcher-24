$(document).ready(function() {
    setInterval(function() {
        var index = $('.slider-item.active').index();
        $('.slider-item').removeClass('active');

        if((index + 1) >= $('.slider-item').length) {
            $('.slider-item').eq(0).addClass('active');
        }
        else {
            $('.slider-item').eq(index + 1).addClass('active');
        }
    }, 4000);
});