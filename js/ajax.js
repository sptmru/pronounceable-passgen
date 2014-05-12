function generatePassword() {
	$('.password').val('');
	$.ajax({
        url: 'include/generatePassword.php?action=generatePassword',
        data: ({username: $('.username').val(),date: $('.datepicker').val()}),
        success: function(data) {
            $('.password').val(data);
        }
    });
}
