<?php
    if (isset($_POST['submit'])) {
        $passportID = &_POST['passportID'];
        $firstName = &_POST['passportID'];
        $lastName = &_POST['passportID'];
        $middleName = &_POST['passportID'];
        $adultHead = &_POST['passportID'];
        $childHead = &_POST['passportID'];

        $errorEmpty = false;
        $errorPassport = false;

        if (empty($firstName) || empty($lastName) || empty(middleName)) {
            console.log('Name form are empty');
            $errorEmpty = true;
        }
    }





?>