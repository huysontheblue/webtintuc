$(document).ready(function() {
    setTimeout(() => {
        $(".general-message").fadeOut();
    }, 5000);
    let initTinyMCE = (id) => {
        tinymce.init({
            selector: '#' + id,
            plugins: 'advlist autolink lists link charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
            height: '300',
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code | rtl ltr',
            toolbar_mode: 'floating',
        });
    };
    initTinyMCE('about_our_mission');
    initTinyMCE('about_our_vision');
    initTinyMCE('about_services');
});