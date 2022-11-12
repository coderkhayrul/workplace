
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


