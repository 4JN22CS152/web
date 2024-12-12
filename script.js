$(document).ready(function() {
    $('#registration-form').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var address = $('#address').val();

        $.ajax({
            type: 'POST',
            url: 'php/register.php',
            data: {name: name, email: email, phone: phone, address: address},
            success: function(data) {
                $('#result').html(data);
            }
        });
    });
});
