$('#login_form').submit(function() {
    url = $(this).attr('action');

    email = $('#email').val();
    password = $('#password').val();

    $.post(url, { email: email, password: password }, function(fb) {
        alert(fb)
    })

    return false;
})