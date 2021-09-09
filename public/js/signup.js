$(function() {
    $('#signup-form').on('submit', function(e) {
        e.preventDefault();

        var that = this;

        $.ajax({
            url: base_url + '/func/user/signup',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            type: 'POST',
            data: $(this).serialize(),
            success: function( data ) {

            },
            error: function( data ) {
                var data = data.responseJSON;

                if( data.messages ) {
                    var message = data.messages;

                    fieldValidation( $(that).find('input[name="fullname"]'), message.fullname );
                    fieldValidation( $(that).find('input[name="birthday"]'), message.birthday );
                    fieldValidation( $(that).find('textarea[name="address"]'), message.address );
                    fieldValidation( $(that).find('textarea[name="description"]'), message.description );
                    fieldValidation( $(that).find('input[name="contact"]'), message.contact );
                    fieldValidation( $(that).find('input[name="email"]'), message.email );
                    fieldValidation( $(that).find('input[name="username"]'), message.username );
                    fieldValidation( $(that).find('input[name="password"]'), message.password );
                    fieldValidation( $(that).find('select[name="mall"]'), message.mall );
                    fieldValidation( $(that).find('input[name="agreement_1"]'), message.agreement_1 );
                    fieldValidation( $(that).find('input[name="agreement_2"]'), message.agreement_2 );
                    fieldValidation( $(that).find('input[name="agreement_3"]'), message.agreement_3 );
                    fieldValidation( $(that).find('input[name="agreement_4"]'), message.agreement_4 );
                }
            },
            beforeSend: function() {
                $('#alert-notification').html('');
                $('.form-control').removeClass('is-invalid');
                $('.invalid-feedback').remove();
                $(that).find('button[type="submit"]').attr('disabled', 'disabled');
                $(that).find('button[type="submit"]').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function() {
                $(that).find('button[type="submit"]').attr('disabled', false);
                $(that).find('button[type="submit"]').html('Sign Up');
            }
        });
    });
});

function alertMessage(message, type) {
    var alert = '';
    alert += '<div class="alert alert-'+ type +' alert-dismissible fade show" role="alert">';
        alert += message;
    alert += '</div>';

    return alert;
}

function inputFeedback(message, type) {
    var feedback = '';
    feedback += '<div class="'+ type +'-feedback d-block">';
        feedback += message;
    feedback += '</div>';

    return feedback;
}

function fieldValidation(fieldElement, message) {
    if(message) {
        fieldElement.addClass('is-invalid');
        fieldElement.after(inputFeedback(message, 'invalid'));
    } else {
        fieldElement.removeClass('is-invalid');
    }
}