$(function (){

    // ================ Upload image

    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    var resize = $('#upload-demo').croppie({
        enableExif: true,
        enableOrientation: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'square'
        },
        boundary: {
            width: 300,
            height: 300
        }
    });

    $('#image').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            resize.croppie('bind',{ url: e.target.result }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
    });

    $('.upload-image').on('click', function (ev) {
        ev.preventDefault();
        resize.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (img) {
            html = '<img src="' + img + '" name="image" />';
            $("#preview-crop-image").html(html);
            $(".preview-img").attr('src', img);
            $('#image-data').val(img)
            console.log(img);
        });
    });
});
