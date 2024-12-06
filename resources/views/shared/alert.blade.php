<script>
    document.addEventListener('DOMContentLoaded', function() {
        const notifications = {
            error: @json(session('error')),
            warning: @json(session('warning')),
            hi: @json(session('hi')),
            info: @json(session('info')),
            success: @json(session('success'))
        };

        function showAlert(type, title, text) {
            Swal.fire({
                title: title,
                text: text,
                icon: type,
                timer: 4000,
                timerProgressBar: true,
                showConfirmButton: false,
                toast: true,
                position: "top-end"
            });
        }

        if (notifications.error) {
            showAlert('error', 'Erreur', notifications.error);
        }

        if (notifications.warning) {
            showAlert('warning', 'Avertissement', notifications.warning);
        }

        if (notifications.hi) {
            showAlert('info', 'Hi', notifications.hi);
        }

        if (notifications.info) {
            showAlert('info', 'Information', notifications.info);
        }

        if (notifications.success) {
            showAlert('success', 'Succès', notifications.success);
        }
    });
</script>