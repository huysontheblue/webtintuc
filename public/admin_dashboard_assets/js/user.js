$(document).ready(function() {
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    setTimeout(() => {
        $(".general-message").fadeOut();
    }, 3000);
});

$(document).ready(function() {
    setTimeout(() => {
        $(".general-message").fadeOut();
    }, 3000);
});