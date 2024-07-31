// SERVIÇO
$(document).ready(function () {
    $('input[name="customRadio"]').change(function () {
        if ($('#ativarUsuario').is(':checked')) {
            $.ajax({
                url: 'class/usuario.php',
                type: 'POST',
                data: {
                    status: 'ativarUsuario'
                },
                success: function (response) {
                    $('#tabela-usuarios tbody').html(response);
                }
            });
        } else if ($('#desativarUsuario').is(':checked')) {
            $.ajax({
                url: 'class/usuario.php',
                type: 'POST',
                data: {
                    status: 'desativarUsuario'
                },
                success: function (response) {
                    $('#tabela-usuarios tbody').html(response);
                }
            });
        }
    });
});