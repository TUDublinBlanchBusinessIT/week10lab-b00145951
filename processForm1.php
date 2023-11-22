<?php
session_start();

// Gathering data from the form
$passengerFN = $_POST['passengerFN'];
$passengerSN = $_POST['passengerSN'];
$luggage = isset($_POST['luggage']) ? 1 : 0;

// Storing data in session
$_SESSION['passengerFN'] = $passengerFN;
$_SESSION['passengerSN'] = $passengerSN;
$_SESSION['luggage'] = $luggage;

// Checking if the luggage checkbox has been checked
if ($luggage == 1) {
    // Redirecting to luggage.html
    header('Location: luggage.html');
} else {
    // Redirecting to finalStep.php
    header('Location: finalStep.php');
}

exit;
?>
