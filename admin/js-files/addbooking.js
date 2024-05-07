$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        var passportID = $("#passportID").val();
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var middleName = $("#middleName").val();
        var date = $("#date").val();
        var adultHead = $("#adultHead").val();
        var childHead = $("#childHead").val();
        var specialReq = $("#request").val();

        var submit = $("#bookSubmit").val();

        $("formMassage").load("addbooking.php", {
            passportID: passportID,
            firstName: firstName,
            lastName: lastName,
            middleName: middleName,
            date: date,
            adultHead: adultHead,
            childHead: childHead,
            request: specialReq
        });
    })
})