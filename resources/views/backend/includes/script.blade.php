<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<!-- SweetAlert2 -->
<script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>

@stack('custom-script')

<script src="{{asset('backend/dist/js/custom.js')}}"></script>


<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('backend/dist/js/pages/dashboard2.js')}}"></script>

<script>
    @if (Session::has('message'))

    // Custom SweetAlert
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}")
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}")
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}")
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}")
            break;
    }
    @endif
</script>
