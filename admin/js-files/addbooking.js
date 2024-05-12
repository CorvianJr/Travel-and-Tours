$(document).ready(function() {

    $('#saveBooking').click(function (event){
        event.preventDefault();
        
        const booking_id = $("#booking_id").val(); //Auto increment
        const package_id = $('#package_id').val(); //Get ID upon clicking BOOK NOW
        const passport = $('#passport').val();
        const flight_code = $('#flight_code').val();

        //NAME
        const username = $_SESSION(); //Used to get the names in $_SESSION
        const firstname = $('#fname').val();
        const lastname = $('#fname').val();
        const middlename = $('#mname').val();

        const flight_date = $('#flight_date').val();
        const adult_head = $('#adult_head').val();
        const child_head = $('#child_head').val();
        

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

// 11/05/2024 : CHANGED THE DATABASE FORMAT