import * as bootstrap from 'bootstrap';
import Swal from 'sweetalert2';

// Make Bootstrap available globally
window.bootstrap = bootstrap;

// Delete confirmation with SweetAlert2
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('form');

            Swal.fire({
                title: 'Ar tikrai norite ištrinti?',
                text: 'Šio veiksmo negalėsite atšaukti!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Taip, ištrinti!',
                cancelButtonText: 'Ne'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
