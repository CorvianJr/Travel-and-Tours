$(document).ready(function() {

    $('#registerBtn').click(function() {
        console.log('Register button Pressed');

        const username = $('#username').val();
        const lname = $('#lname').val();
        const fname = $('#fname').val();
        const mi = $('#mi').val();
        const email = $('#email').val();
        const phone = $('#phone').val();
        const password = $('#password').val();
        const confirm_password = $('confirm_password').val();

    $.ajax({
        url: 'add-user.php',
        type: "POST",
        data: {
            username: username,
            fname: fname,
            lname: lname,
            mi: mi,
            email: email,
            phone: phone,
            pass: password,
            confirm_password: confirm_password
        },
        success: function  () {
            console.log('Successfully registered to Database');
        }
    });
    })
});

// FINALLY FUCKING ADDS USER TO THE DATABASE

// JUST NEED VALIDATION AND CATCHERS

// COMMITTING