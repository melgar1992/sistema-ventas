$(document).ready(function () {
    var base_url = $("#base_url").val();
    $('#comprobantes').on('change', function () {
        option = $(this).val();

        if (option != '') {
            infocomprobante = option.split('*');

            $('#idcomprobante').val(infocomprobante[0]);
            $('#igv').val(infocomprobante[2]);
            $('#serie').val(infocomprobante[3]);
            $('#numero').val(generarNumero(infocomprobante[1]));;
        }
        else {
            $('#idcombrobante').val(null);
            $('#igv').val(null);
            $('#serie').val(null);
            $('#numero').val(null);

        }

    })

    $(document).on("click", ".btn-check", function () {

        cliente = $(this).val();
        infocliente = cliente.split("*");
        $("#idcliente").val(infocliente[0]);
        $("#cliente").val(infocliente[1]);
        $("#modal-default").modal("hide");
    });
    $("#producto").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: base_url + "Movimientos/Ventas/getProductos",
                type: "POST",
                dataType: "json",
                data: { valor: request.term },
                success: function (data) {
                    response(data);
                }
            });
        },
        minLength: 2,
        select: function (event, ui) {
            data = ui.item.id_productos + "*" + ui.item.codigo + "*" + ui.item.label + "*" + ui.item.precio + "*" + ui.item.stock;
            $("#btn-agregar").val(data);
        },
    });

})


function generarNumero(numero) {
    if (numero >= 99999 && numero < 999999) {
        return (Number(numero) + 1);
    }
    if (numero >= 9999 && numero < 99999) {
        return '0' + (Number(numero) + 1);
    }
    if (numero >= 999 && numero < 9999) {
        return '00' + (Number(numero) + 1);
    }
    if (numero >= 99 && numero < 999) {
        return '000' + (Number(numero) + 1);
    }
    if (numero >= 9 && numero < 99) {
        return '0000' + (Number(numero) + 1);
    }
    if (numero < 9) {
        return '00000' + (Number(numero) + 1);
    }
}