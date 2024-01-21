//hacer un js para cada archivo
document.addEventListener('DOMContentLoaded', function () {
    // Send Email
    
    $('#form').submit(function(event) {
        event.preventDefault();     
        Swal.fire({
            title: '¿Estás seguro de que quieres enviar el correo?',
            text: 'Una vez enviado, no se puede deshacer esta acción.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, enviar correo',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = new FormData($('#form')[0]);
    
                $.ajax({
                    type: 'POST',
                    url: 'controller/correo.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function(response) {
                        if (response == 'ok') {
                            Swal.fire({
                                icon: 'success',
                                title: '¡Enviado!',
                                text: 'Tu formulario ha sido enviado correctamente.'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Hubo un problema al enviar tu formulario. Por favor, inténtalo de nuevo más tarde.'
                            });
                        }
                    }
                });
            }
        });
    });
    

    //Map
    var map = document.getElementById('map');
    if(map){
        var map = L.map('map').setView([41.374215985745444, 2.145466297298953], 30);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        var marker = L.marker([41.374215985745444, 2.145466297298953]).addTo(map);
    }
    //Navbar
    document.getElementById('toggle-menu').addEventListener('click', function() {
        document.getElementById('nav-menu').classList.toggle('hidden');
    });
})
