$(function() {
    $('.botaoQueEscondeOuMostra').click(function() {
	var _id = $(this).attr('id').split('_')[1];

 

	mostra(_id);
    });
});

function mostra(id) {
    if ($('#' + id).css('display') == 'none') {
//	$('#' + id).show('slow');
	$('#' + id).fadeIn();
//	$('#' + id).slideDown(1000);
    } else {
//	$('#' + id).hide('fast');
	$('#' + id).fadeOut();
//	$('#' + id).slideUp(1000);
    }
}