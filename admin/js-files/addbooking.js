$(document).ready(function() {

    $('#saveBook').click(function() {

        const bookingID = $('#bookingID').val()
        const passport = $('#passport').val();
        const firstName = $('#firstName').val();
        const lastName = $('#lastName').val();
        const middleInit = $('middleInit').val();
        const date = $('date').val();
        const adultHead = $('adultHead').val();
        const childHead = $('childHead').val();
        const specialReq = $('specialReq').val();

        $.ajax({
            url: 'php-files/add-booking.php',
            method: 'POST',
            dataType: 'json',
            data: {
                bookingID: bookingID,
                passport: passport,
                firstName: firstName,
                lastName: lastName,
                middleInit: middleInit,
                date: date,
                adultHead: adultHead,
                childHead: childHead,
            },
            success: function(response) {
                console.log('Booking is recorded to Database');
                console.log('Response: ', response);
            },
            error: function(xhr, status, error) {
                console.error('Error: ', error);
                console.log('XHR: ', xhr);
            }
        })
    });
});