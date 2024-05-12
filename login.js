$(document).ready(function() {

    $('#loginBtn').click(function() {
        console.log('Login Button pressed');

        const username = $('#username').val();
        const password = $('#password').val();

        $.ajax({
            url: 'login-user.php',
            type: "POST",
            data: {
                username: username,
                pass: password
            },
            success: function (response) {
                window.location='client.php';
            }
        });
    })
});

// Reveal Password Checkbox
function revealPsw() {
    var x = document.getElementById("password");
    if(x.type === "password"){
        x.type = "text";
    }else{
        x.type = "password";
    };
};