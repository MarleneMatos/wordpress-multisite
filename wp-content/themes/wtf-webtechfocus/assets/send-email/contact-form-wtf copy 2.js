$(document).on("submit", "#wtfContactForm", function (e) {
    var dataString = $('#wtfContactForm').serialize();
    console.log(dataString);
    /*
    $.ajax({
        method: "POST",
        url: "https://theme.webtechfocus.com/assets/send-email/sendemail-contact-form-wtf.php",
        data: dataString,
        dataType: 'json',
        success: function (data) {
            if (data.success == 0) {
                //alert(data);

                //alert("Name: " + $("#name").val() + "|Surname: " + $("#surname").val() + "|Email: " + $("#email").val() + "|Message: " + $("#message").val());

                if (data.name_feedback != '') {
                    $("#name-feedback").removeClass("invalid-feedback");
                    //$('#name_feedback').html(data.name_feedback);
                }
                if (data.email_feedback != '') {
                    $("#email-feedback").removeClass("invalid-feedback");
                    //$('#email_feedback').html(data.email_feedback);
                }
                if (data.email_feedback != '') {
                    $("#message-feedback").removeClass("invalid-feedback");
                    //$('#message_feedback').html(data.message_feedback);
                }
            }

            else if (data == 1) {
                $('#name_feedback').html(data.name_feedback);
                $('#email_feedback').html(data.email_feedback);
                $('#message_feedback').html(data.message_feedback);

                $('#name').val('');
                $('#email').val('');
                $('#message').val('');

                $("#successMessage").removeClass("visually-hidden");
                //$("#wtfFormInner").hide();
            }
        },
        error: function () {

        }
    });*/

});


/*

$(document).ready(function () {
    $('#submit_btn').click(function () {

        var dataString = $('#contact_form').serialize();
        $.ajax({
            type: "POST",
            url: 'send_form_email.php',
            data: dataString,
            dataType: 'json',
            success: function (data) {
                if (data.success == 0) {
                    if (data.name_feedback != '')
                        $('#name_feedback').html(data.name_feedback);
                    if (data.email_feedback != '')
                        $('#email_feedback').html(data.email_feedback);
                    if (data.email_feedback != '')
                        $('#message_feedback').html(data.message_feedback);
                }
                else if (data.success == 1) {
                    $('#name_feedback').html(data.name_feedback);
                    $('#email_feedback').html(data.email_feedback);
                    $('#message_feedback').html(data.message_feedback);

                    $('#name').val('');
                    $('#email').val('');
                    $('#message').val('');

                    
                    $("#successMessage").removeClass("visually-hidden");
                }

            },
            error: function () {

            }
        });

        return false;
    });
}
);*/