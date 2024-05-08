$(document).ready(function() {
    // Function to handle editing a package
    function redirect(packCode) {
        window.location.href = 'booking.php?pack_code=' + packCode;
    }

    $.ajax({
        url: 'php-files/bookManage/showPacks.php',
        type: 'GET',
        success: function(data) {
            //append the fetched HTML directly to the package-container
            $('#packContainer').html(data);
            // Add click event handler for "Edit Package" buttons
            $('.bookBtn').click(function() {
                // Get the pack_code from the clicked button's data attribute
                var packCode = $(this).data('pack-code');//changee pack_code to password
                // Call editPackage function with pack_code parameter
                redirect(packCode);
                console.log("Pack Code:", packCode);
            });
        },
        error: function(xhr, status, error) {
                console.error('Error:', error);
                console.log('XHR:', xhr);
        }   
        
    });
});
