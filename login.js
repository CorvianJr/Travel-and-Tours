$(document).ready(function() {

    $('#loginBtn').click(function() {


    })
});

function revealPsw() {
    var x = document.getElementById("password");
    if(x.type === "password"){
        x.type = "text";
    }else{
        x.type = "password";
    };
};