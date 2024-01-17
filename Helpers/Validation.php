<?php
function validateInput($name, $email,$pnumber, $proficiency) {
    $errors = array();

    // Validate Name
    if (empty($name)) {
        $errors[] = "Name cannot be empty";
    }
    if (empty($pnumber)) {
        $errors[] = "Phone Number cannot be empty";
    }
    // Validate Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Validate Proficiency
    if (empty($proficiency)) {
        $errors[] = "Proficiency cannot be empty";
    }

    // Return validation result
    if (empty($errors)) {
        return true; // Input is valid
    } else {
        return $errors; // Return array of error messages
    }
}