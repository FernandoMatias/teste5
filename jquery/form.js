/**
 * @author	Sisdado Tecnologia
 * @link	www.sisdado.com.br
 *
 * Define valores de m�scara para formul�rios
 */

$(function() {
    $('.jsPrice, .jsMaskPrice').each(function() {
	if ($(this).attr('data-priceFormat') != 'true') {
	    $(this).priceFormat();
	    $(this).attr('data-priceFormat', 'true');
	}
    });
});

$(function() {
    $('.jsMaskPrice4').each(function() {
	if ($(this).attr('data-priceFormat') != 'true') {
	    $(this).priceFormat({
		centsLimit: 0 , centsSeparator: ''
		
	    });
	    $(this).attr('data-priceFormat', 'true');
	}
    });
});
