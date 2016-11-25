$(document).ready(function () {
    $('.default').parents(".dropdown").find('.dropdown-toggle').html($('.default').text() + ' <span class="caret"></span>');
    $('.default-lang').parents(".dropdown").find('.dropdown-toggle').html($('.default-lang').text() + ' <span class="caret"></span>');
});

$(".js-selector li a").click(function () {
    $(this).parents(".dropdown").find('.dropdown-toggle').html($(this).text() + ' <span class="caret"></span>');
    $(this).parents(".dropdown").find('.dropdown-toggle').val($(this).data('value'));
});