$(document).ready(function() {
    // Function to handle editing a package
    function editPackage(packCode) {
        // Redirect to editPackage.php with pack_code parameter
        window.location.href = 'editPackage.php?pack_code=' + packCode;
    }

    $.ajax({
        url: 'php-files/test.php',
        type: 'GET',
        success: function(data) {
            // Append the fetched HTML directly to the package-container
            $('#packContainer').html(data);
            // Add click event handler for "Edit Package" buttons
            $('.editBtn').click(function() {
                // Get the pack_code from the clicked button's data attribute
                var packCode = $(this).data('pack-code');
                // Call editPackage function with pack_code parameter
                editPackage(packCode);
                console.log("Pack Code:", packCode);
            });
        }
    });
});
