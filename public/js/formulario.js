document.addEventListener('DOMContentLoaded', function () {
    var formulario = document.getElementById('formulario');

    formulario.addEventListener('submit', function (event) {
        event.preventDefault();
        alert('O cadastro foi realizado com sucesso!');
        window.location.href = 'http://127.0.0.1:8000';
    });
});
