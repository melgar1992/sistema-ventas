$(document).ready(function () {
    $(document).click(function () {

    });

    $("#guardar").click(function () {
        event.preventDefault();

        
        $.ajax({
            type: "POST",
            url: "http://localhost/sistema-ventas/application/controllers/Mantenimiento/Categorias/guardarCategoria",
             success: function (data) {
                
                console.log(data);
    
            }
        });

    })


})