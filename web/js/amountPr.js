
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
		    $input.val(Math.max(parseFloat($input.val())-0.1, 0.4));
     		    return false;
		});

		$input.next('a.plus', this.parentNode).click(function() {
		    $input.val(parseFloat(parseFloat(($input.val()) +0.1).toFixed(1)) );
		    return false;
		});

	});
});
