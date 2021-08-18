$(document).ready(function() {
    AOS.init();

    $(document).mouseup(function (e){
        if($('.modal').hasClass('active')) {
            var div = $(".modal > .modal-container");

            if (!div.is(e.target) && div.has(e.target).length === 0) {
                $('.modal').removeClass('active');
                $('body').removeClass('modal-opened');
            }
        }
	});

    $('input[type="tel"]').mask("+375 (99) 999-99-99");
});

$(".scroller").click(function() {
    $('html, body').animate({
        scrollTop: $($(this).attr('scroll-href')).offset().top
    }, 2000);
});

$('#nav-trigger-btn').click(function(e) {
    e.preventDefault();
    $('.nav > .container').toggleClass('opened');
});

$('.modal-open-btn').click(function(e) {
    e.preventDefault();
    $('#' + $(this).attr('modal-id')).addClass('active');
    $('body').addClass('modal-opened');
});

$('.modal-close-btn').click(function(e) {
    e.preventDefault();
    $('#' + $(this).attr('modal-id')).removeClass('active');
    $('body').removeClass('modal-opened');
});

$('.checkbox-policy').click(function() {
    if($(this).is(':checked'))
        $('.checkbox.policy input:checkbox').prop('checked', true);
    else
        $('.checkbox.policy input:checkbox').prop('checked', false);
});