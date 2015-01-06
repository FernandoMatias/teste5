function preenche(valor){
    var elemento=document.getElementById("input_text");
    var value=elemento.value;
    elemento.value=value+valor;
}

//$(function () {
//    checkTeclado();
//});
//
//function checkTeclado() {
//    $('#teclado input[type=button]').click(function () {
//	var valor = vco(parseFloat(vci($('#input_text').val()) + '' + $(this).val()));
//	console.log(valor);
//	$('#input_text').val(valor);
//    });
//}
//
//function preenche(valor) {
////    var elemento=document.getElementById("input_text");
////    var value=elemento.value;
////    elemento.value=value+valor;
//}
//
//function vco(num) {
//    num = num.toFixed(0).toString();
//    if (num) {
//	num = num.replace(/\,/g, "");
//	num = num.replace(/\./g, ",");
//    }
//    return num;
//}
//
//function vci(num) {
//    num = num.toString();
//    if (num) {
//	num = num.replace(/\%/g, "");
//	num = num.replace(/\./g, "");
//	num = num.replace(/\,/g, ".");
//    }
//
//    num = parseFloat(num);
//
//    if (isNaN(num)) {
//	num = parseFloat(0);
//    }
//    return num;
//}