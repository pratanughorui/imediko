<?php

function calculateDOBFromAge($age) {
    $currentYear = date('Y');
    $birthYear = $currentYear - $age;
    
    $dob = new DateTime("$birthYear-01-01"); // Assuming birthdate on January 1st
    
    return $dob->format('Y-m-d');
}

$givenAge = 56; // Replace this with the desired age
$dateOfBirth = calculateDOBFromAge($givenAge);
echo "Date of Birth: $dateOfBirth";


?>