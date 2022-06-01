$(document).ready(function () {
    $('#btnBuscar').click(function (event) {
        var procesSearch = $('#search').val();
        if(procesSearch.length>2){
            window.location.href = '../VIEWS/list-process.php?search=' + procesSearch;
        }else{
            alert('Debes escribir una palabra clave del proceso a buscar de mínimo 3 caracteres.');
        }
    });
});