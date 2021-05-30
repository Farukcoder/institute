/*function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imgPreview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }else{
        $('#imgPreview').attr('src', '');
    }
}

$("input[name=image]").change(function(){
    readURL(this);
});*/
var load = {
    on:function(){
        $('.wait').show();
    },
    off:function(){
        $('.wait').hide();
    }
};
$('.confirm').on('click',function(){
    return confirm('Are you sure ?');
});

$('.img-upload').on('change', function () {

    /*if (this.files[0].size / 1024 > 512) {
        alert('File size cannot greater than 500KB');
        return false;
    }*/
    load.on();
    var FD = new FormData();
    $.each($(this).prop("files"),function(i,e){
        FD.append('images[]', e);
    });
    //console.log(images);
    //var myFormData = new FormData();


    //console.log(FD);

    $.ajax({
        url: 'ajax/image-upload',
        type: 'POST',
        processData: false, // important
        contentType: false, // important
        dataType: 'json',
        data: FD,
        success: function (rs) {
            //alert('uploaded');
            $('.img-upload').val('');

            $('#uploadedImage').load('ajax/current-images',function(){
                load.off();
            });
        }
    });

});



$('body').on('click','.inv-img .del',function(){
    if(confirm('Are you sure ?')){
        load.on();
        var id = $(this).data('id');
        $.get('ajax/delete-image/'+id).done(function(result){
            $('#uploadedImage').load('ajax/current-images',function(){
                load.off();
            });
        });
    }
});

$(function(){
    $('#uploadedImage').load('ajax/current-images');
});


