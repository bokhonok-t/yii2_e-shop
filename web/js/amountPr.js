
function check_symbol(event) {
 event= event || window.event;
 if ((event.keyCode > 57 || event.keyCode <48) && (event.keyCode<35 ||
    event.keyCode>39) && event.keyCode!=8)
  return false;
}

$(function() {
	$('input').each(function() {
		var $input = $(this);
		$input.prev('a.minus').click(function() {
		    $input.val ( Math.max( parseInt( $input.val() )-50, 100 ) );
     		    return false;
		});

		$input.next('a.plus', this.parentNode).click(function() {
		    $input.val ( parseInt( $input.val() )+50 );
		    return false;
		});

	});
});
