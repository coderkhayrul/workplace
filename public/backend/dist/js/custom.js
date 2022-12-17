
$(document).on("click", "#delete", function(e) {
    e.preventDefault();
    var link = $(this).attr("href");
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
    }).then(function(t) {
        t.value ? window.location.href = link : t.dismiss === Swal.DismissReason.cancel &&
        Swal.fire({
            title: "Cancelled",
            text: "Your imaginary file is safe :)"
        })
    })
});


// Custom File Input
$(document).ready(function () {
    bsCustomFileInput.init();
});

// Live Image Upload
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#profileImage')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURLserviceImg(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#servicepreviewImg')
                .attr('src', e.target.result)
                .width(200)
                .height(100);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURLserviceUpdateImg(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#servicepreviewupdateImg')
                .attr('src', e.target.result)
                .width(200)
                .height(100);
        };
        reader.readAsDataURL(input.files[0]);
    }
}



