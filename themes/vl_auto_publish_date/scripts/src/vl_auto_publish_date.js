$(document).ready(function() {
	$('#status').on('change', function() {
		var $entryDate = $('#entry_date');
		var val = $(this).val();

		if(val !== 'closed') {
			var current = moment();
			var dateVal = moment($entryDate.val()).unix();

			// Only do this if the date already isnt in the future
			if(dateVal < current.unix()) {
				$entryDate.val(current.format('YYYY-MM-DD hh:mm A'));
			}

			// If we are setting the status to open, let's change the button to say publish
			if(val === 'open') {
				$('#revision_button').hide();
				$('#submit_button').val('Publish');
			}
		}
	});
});