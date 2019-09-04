<script>
    @if(session('signed'))
    swal('Masuk!', 'Halo {{Auth::user()->username}}! Anda telah masuk.', 'success');

    @elseif(session('expire'))
    swal('Authentication Required!', '{{ session('expire') }}', 'error');

    @elseif(session('logout'))
    swal('Keluar!', '{{ session('logout') }}', 'warning');

    @elseif(session('warning'))
    swal('PERHATIAN!', '{{ session('warning') }}', 'warning');

    @elseif(session('status'))
    swal('Reset Password Success!', '{{ session('status') }}', 'success', '3500');

    @elseif(session('success'))
    swal('SUKSES!', '{{ session('success') }}', 'success');

    @elseif(session('delete'))
    swal('Success!', '{{ session('delete') }}', 'success');

    @elseif(session('error'))
    swal('Profile Settings', '{{ session('error') }}', 'error');

    @elseif(session('error_revision'))
    swal('Error!', '{{ session('error_revision') }}', 'error');
    @endif

    @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    swal('Oops..!', '{{ $error }}', 'error');
    @endforeach
    @endif
</script>