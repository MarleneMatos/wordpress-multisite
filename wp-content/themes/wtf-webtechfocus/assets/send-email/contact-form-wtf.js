// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            //var dataString = "&name:" + $("#name").val() + "&email:" + $("#email").val() + "&email_message:" + $("#message").val();
            var dataString = $('#wtfContactForm').serialize();
            var formFields = "Name: " + $("#name").val() + "|Surname: " + $("#surname").val() + "|Email: " + $("#email").val() + "|Message: " + $("#message").val();
            console.log(formFields);
            
            $.ajax({
                method: "POST",
                url: "sendemail-contact-form-wtf.php",
                data: dataString,
                success: function (data) {
                    if (data.success == 0) {

                        console.log(formFields);
                        console.log(dataString.toString());
                        console.log(data)
                        //alert(data);

                        //alert("Name: " + $("#name").val() + "|Surname: " + $("#surname").val() + "|Email: " + $("#email").val() + "|Message: " + $("#message").val());

                        if ($("#name").val() == "") {
                            //$("#name-feedback").removeClass("invalid-feedback");
                            $('#name_feedback').html(data.name_feedback);
                            $("#errorMessage").html(data.name_feedback);
                            return false;
                        }
                        if ($("#surname").val() == "") {
                            //$("#surname-feedback").removeClass("invalid-feedback");
                            $("#errorMessage").html("<p>&nbsp;</p><p>real person yeah!</p>");
                            return true;
                        }
                        if ($("#email").val() == "") {
                            $('#email_feedback').html(data.email_feedback);
                            $("#errorMessage").html("<p>&nbsp;</p><p>real person yeah!</p>");
                            //$("#email-feedback").removeClass("invalid-feedback");
                            return false;
                        }
                        if ($("#message").val() == "") {
                            $('#message_feedback').html(data.message_feedback);
                            //$("#message-feedback").removeClass("invalid-feedback");
                            return false;
                        }
                    }

                    else if (data.success == 1) {
                        //$("#name-feedback").addClass("invalid-feedback");
                        //$("#email-feedback").addClass("invalid-feedback");
                        //$('#name_feedback').html(data.name_feedback);
                        //$('#email_feedback').html(data.email_feedback);
                        //$('#message_feedback').html(data.message_feedback);
/*
                        $('#name').val('');
                        $('#email').val('');
                        $('#message').val('');
*/
                        $("#successMessage").removeClass("visually-hidden");
                        //$("#wtfFormInner").hide();
                    }
                },
                error: function () {

                }
            });
        }, false)
    })
})()


/*
$(document).on("submit", "#wtfContactForm", function (e) {
    e.preventDefault();
    var dataString = "&name=" + $("#name").val() + "&email=" + $("#email").val() + "&email_message=" + $("#message").val();
    var formFields = "Name: " + $("#name").val() + "|Surname: " + $("#surname").val() + "|Email: " + $("#email").val() + "|Message: " + $("#message").val();

    
    $.ajax({
        method: "POST",
        url: "https://theme.webtechfocus.com/assets/send-email/sendemail-contact-form-wtf.php",
        data: dataString,
        success: function (data) {
            if (data.success == 0) {

                console.log(formFields);
                console.log(dataString.toString());
                console.log(data.name_feedback)
                //alert(data);

                //alert("Name: " + $("#name").val() + "|Surname: " + $("#surname").val() + "|Email: " + $("#email").val() + "|Message: " + $("#message").val());

                if (data.name_feedback != '') {
                    $("#name-feedback").removeClass("invalid-feedback");
                    $('#name_feedback').html(data.name_feedback);
                }
                if (data.email_feedback != '') {
                    $("#email-feedback").removeClass("invalid-feedback");
                    $('#email_feedback').html(data.email_feedback);
                }
                if (data.message_feedback != '') {
                    $("#message-feedback").removeClass("invalid-feedback");
                    $('#message_feedback').html(data.message_feedback);
                }
            }

            else if (data.success == 1) {
                $("#name-feedback").addClass("invalid-feedback");
                $("#email-feedback").addClass("invalid-feedback");
                //$('#name_feedback').html(data.name_feedback);
                //$('#email_feedback').html(data.email_feedback);
                //$('#message_feedback').html(data.message_feedback);

                $('#name').val('');
                $('#email').val('');
                $('#message').val('');

                $("#successMessage").removeClass("visually-hidden");
                //$("#wtfFormInner").hide();
            }
        },
        error: function () {

        }
    });

});
*/

