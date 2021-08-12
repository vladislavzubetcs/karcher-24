$(document).ready(function() {
    AOS.init();
});

$('#nav-trigger-btn').click(function(e) {
    e.preventDefault();
    $('.nav > .container').toggleClass('opened');
});

$('#modal-open-btn').click(function(e) {
    e.preventDefault();
    $('.modal#policy').toggleClass('active');
});