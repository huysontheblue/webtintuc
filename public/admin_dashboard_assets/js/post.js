$(document).ready(function() {
    // $('#image-uploadify').imageuploadify();
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });

    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });

    tinymce.init({
        selector: '#post_content',
        // plugins: 'advlist autolink lists link image media charmap print preview hr anchor pagebreak',
        plugins: 'advlist autolink lists link image media charmap preview anchor pagebreak',
        toolbar_mode: 'floating',
        height: '500',

        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code | rtl ltr',
        toolbar_mode: 'floating',

        image_title: true,
        automatic_uploads: true,

        images_upload_handler: function(blobinfo, success, failure) {
            let formData = new FormData();
            let _token = $("input[name='_token']").val();
            let xhr = new XMLHttpRequest();
            xhr.open('post', "{{ route('admin.upload_tinymce_image') }}");
            xhr.onload = () => {
                if (xhr.status !== 200) {
                    failure("Http Error: " + xhr.status);
                    return
                }
                let json = JSON.parse(xhr.responseText);
                if (!json || typeof json.location != 'string') {
                    failure("Invalid JSON: " + xhr.responseText);
                    return
                }
                success(json.location);
            }
            formData.append('_token', _token);
            formData.append('file', blobinfo.blob(), blobinfo.filename());
            xhr.send(formData);
        }
    });
    setTimeout(() => {
        $(".general-message").fadeOut();
    }, 5000);
});


$(document).on('change', '.inputPostTitle', (e) => {
    e.preventDefault();

    let $this = e.target;

    let csrf_token = $($this).parents("form").find("input[name='_token']").val();
    let titlePost = $($this).parents("form").find("input[name='title']").val();

    let formData = new FormData();
    formData.append('_token', csrf_token);
    formData.append('title', titlePost);

    $.ajax({
        url: "{{ route('admin.posts.to_slug') }}",
        data: formData,
        type: 'POST',
        dataType: 'JSON',
        processData: false,
        contentType: false,
        success: function(data) {
            if (data.success) {
                $('.slugPost').val(data.message);

            } else {
                alert("Bị lỗi khi nhập title !")
            }
        }
    })
})


$(document).ready(function() {
    setTimeout(() => {
        $(".general-message").fadeOut();
    }, 5000);
});