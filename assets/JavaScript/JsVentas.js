$(document).ready(function(){

$('#comprobantes').on('change',function(){
    option = $(this).val();

    if (option != '') {
        infocomprobante = option.split('*');
        
        $('#idcomprobante').val(infocomprobante[0]);
        $('#igv').val(infocomprobante[2]);
        $('#serie').val(infocomprobante[3]);
        $('#numero').val(generarNumero(infocomprobante[1]));;
    }
    else{
        $('#idcombrobante').val(null);
        $('#igv').val(null);
        $('#serie').val(null);
        $('#numero').val(null);

    }
})



})
function generarNumero(numero) {
    if (numero>= 99999 && numero< 999999) {
        return (Number(numero) + 1) ;
    }
    if (numero>= 9999 && numero< 99999) {
        return '0' + (Number(numero) + 1);
    }
    if (numero>= 999 && numero< 9999) {
        return '00' + (Number(numero) + 1) ;
    }
    if (numero>= 99 && numero< 999) {
        return '000' + (Number(numero) + 1) ;
    }
    if (numero>= 9 && numero< 99) {
        return '0000' + (Number(numero) + 1) ;
    }
    if (numero< 9) {
        return '00000' + (Number(numero) + 1) ;
    }
}