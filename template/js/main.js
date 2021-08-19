$(document).ready(function() {
    AOS.init();

    $('input[type="tel"]').mask("+375 (99) 999-99-99");
});

$(document).mouseup(function (e){
    if($('.modal').hasClass('active')) {
        var div = $(".modal > .modal-container");

        if (!div.is(e.target) && div.has(e.target).length === 0) {
            $('.modal').removeClass('active');
            $('body').removeClass('modal-opened');
        }
    }
});

$(".scroller").on('click touchstart', function() {
    $('html, body').animate({
        scrollTop: $($(this).attr('scroll-href')).offset().top
    }, 2000);
});

$('#nav-trigger-btn').on('click touchstart', function(e) {
    e.preventDefault();
    $('.nav > .container').toggleClass('opened');
});

$('.modal-open-btn').on('click touchstart', function(e) {
    e.preventDefault();
    $('#' + $(this).attr('modal-id')).addClass('active');
    $('body').addClass('modal-opened');
});

$('.modal-close-btn').on('click touchstart', function(e) {
    e.preventDefault();
    $('#' + $(this).attr('modal-id')).removeClass('active');
    $('body').removeClass('modal-opened');
});

$('.checkbox-policy').on('click touchstart', function() {
    if($(this).is(':checked'))
        $('.checkbox.policy input:checkbox').prop('checked', true);
    else
        $('.checkbox.policy input:checkbox').prop('checked', false);
});

$('#sendContactUs').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/sendcontactus',
        data: $(this).serialize(),
        success: function(data)
        {
            alert(data);
        }
    });
});

$('#sendProblem').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/sendproblem',
        data: $(this).serialize(),
        success: function(data)
        {
            alert(data);
        }
    });
});