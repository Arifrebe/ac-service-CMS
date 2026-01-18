// Datatable
$("#example1").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": false,
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

// Flash message
if (window.flashMessages) {
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
    }

    Object.entries(window.flashMessages).forEach(([type, message]) => {
        if (message) {
            toastr[type](message);
        }
    });
}

// Confirmation
function confirmation(ev, title = "Apakah kamu yakin?" , message = "Tindakan ini tidak dapat diundur.") {
    ev.preventDefault();

    const target = ev.currentTarget;
    let urlToRedirect = null;

    if (target.tagName === 'FORM') {
        urlToRedirect = target.action;
    } else if (target.tagName === 'A') {
        urlToRedirect = target.getAttribute('href');
    }

    Swal.fire({
        title: title,
        text: message,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, lanjutkan',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33'
    }).then((result) => {
        if (result.isConfirmed) {

            if (target.tagName === 'FORM') {
                target.submit();
            }
            else if (target.tagName === 'A') {
                window.location.href = urlToRedirect;
            }
        }
    });
}
