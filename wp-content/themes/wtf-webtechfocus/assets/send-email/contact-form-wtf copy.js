//Form Val and Send Email
$(document).on("submit", "#wtfContactForm", function (e) {
    e.preventDefault();

    alert("Name: " + $("#name").val() + "|Surname: " + $("#surname").val() + "|Email: " + $("#email").val() + 
    "|Message: " + $("#message").val());
        
    if ($("#name").val() == "") {
        $("#name-feedback").removeClass("invalid-feedback");
        return false;
    }
    if ($("#surname").val() == "") {
        //$("#surname-feedback").removeClass("invalid-feedback");
        return true;
    }
    if ($("#email").val() == "") {
        $("#email-feedback").removeClass("invalid-feedback");
        return false;
    }
    if ($("#message").val() == "") {
        $("#message-feedback").removeClass("invalid-feedback");
        return false;
    }

    $.ajax({
        method: "POST",
        url: "https://theme.webtechfocus.com/assets/send-email/sendemail-contact-form-wtf.php",
        data: "&name=" + $("#name").val() +
            //"&surname=" + $("#surname").val() +
            "&email=" + $("#email").val() +
            "&email_message=" + $("#message").val(),
        success: function (data) {
            //alert(data);

            if (data == 1) {
                $("#successMessage").removeClass("visually-hidden");
                $("#wtfFormInner").hide();
            }
            else { // error
                $("#errorMessage").html("<p>&nbsp;</p><p>An error occurred, please check your details and try again.1</p>");
            }
        },
        error: function (jqXHR, exception) {

            $("#errorMessage").html("<p>&nbsp;</p><p>An error occurred, please check your details and try again.2</p>");
            var error_msg = '';
            error_msg = 'Uncaught Error.\n' + jqXHR.responseText;
            // error alert message
            //alert('error :: ' + error_msg);
        }
    });

});
