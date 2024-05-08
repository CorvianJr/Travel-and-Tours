$(document).ready(function() {

    var username = $('#username').val();
    var lname = $('#lname').val();
    var fname = $('#fname').val();
    var mname = $('#mname').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var password = $('#password').val();
    var confirm_password = $('confirm_password').val();

    $.ajax({
        type: "POST",
        url: 'register.php',
        data: {
            username: username,
            lname: lname,
            fname: fname,
            mname: mname,
            email: email,
            phone: phone,
            pass: password,
            status: 'register'
        },
        success: function  (data) {
            if (data == 'pwdMissMatch') {
                $(".pwd-retype").text("Enter the same password");
                $('#confirm_pasword').val('');
            } else if (data == 'sqlError') {
                $(".errorLogs").addClass("error");
                $(".errorLogs").text("SQL Error Occured");
                $('#register-form').find("input").val('');
            } else if (data == 'usernameTaken') {
                $(".uName").text("Username is already taken");
                $('#username').val('');
            } else if (data == 'Error') {
                $(".errorLogs").addClass("error");
                $(".errorLogs").text("Error occured while registering");
            } else if (data == 'OK')  {
                $(".errorLogs").removeClass("error");
                $(".errorLogs").addClass("success");
                $('#register-form').find("input").val('');
                $(".errorLogs").text("Successfully Registered");
                $('#register').text("Submitting ...");
                setTimeout(function () {
                    $(location).attr('href', 'signin.php')
                }, 5000);
            }
        }
    });
});