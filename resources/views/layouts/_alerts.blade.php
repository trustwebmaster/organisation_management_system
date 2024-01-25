<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" type="text/css">
<script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000,
        input: undefined,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    @if (Session::has('success'))
    Toast.fire({
        icon: 'success',
        title: '{{ Session::get('success') }}'
    });
    @endif
    @if (Session::has('error'))
    Toast.fire({
        icon: 'error',
        title: '{{ Session::get('error') }}'
    });
    @endif
    @if (Session::has('warning'))
    Toast.fire({
        icon: 'warning',
        title: '{{ Session::get('warning') }}'
    });
    @endif
    @if (Session::has('info'))
    Toast.fire({
        icon: 'info',
        title: '{{ Session::get('info') }}'
    });
    @endif
</script>
