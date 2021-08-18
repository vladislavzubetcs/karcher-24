var count_problems = 0;

$(document).ready(function() {
    count_problems = $('.problem').length;
});

$('.problem-add-input').click(function(e) {
    e.preventDefault();
    $('.problems-group').append('<div class="problem" problem-id="' + count_problems + '"><input type="text" name="problems[]" placeholder="Введите проблему" required><a href="#" class="problem-delete-btn" onclick="deleteProblemInput(' + count_problems + ')"><img src="/template/img/cross.svg"></a></div>');
    count_problems++;
});

function deleteProblemInput(id) {
    $('.problem[problem-id="' + id + '"]').remove();
}