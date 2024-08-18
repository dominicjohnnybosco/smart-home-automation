<script>
    // Check if the success message exists
    @if(session('success'))
        // Display SweetAlert dialog for success
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}", // Display the success message from the session
            confirmButtonText: 'Okay'
        });
    @endif

    // Check if the error message exists
    @if(session('error'))
        // Display SweetAlert dialog for error
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: "{{ session('error') }}", // Display the error message from the session
            confirmButtonText: 'Okay'
        });
    @endif

    // Check if the warning message exists
    @if(session('warning'))
        // Display SweetAlert dialog for warning
        Swal.fire({
            icon: 'warning',
            title: 'Warning!',
            text: "{{ session('warning') }}", // Display the warning message from the session
            confirmButtonText: 'Okay'
        });
    @endif

    // Check if the info message exists
    @if(session('info'))
        // Display SweetAlert dialog for info
        Swal.fire({
            icon: 'info',
            title: 'Info!',
            text: "{{ session('info') }}", // Display the info message from the session
            confirmButtonText: 'Okay'
        });
    @endif
</script>
