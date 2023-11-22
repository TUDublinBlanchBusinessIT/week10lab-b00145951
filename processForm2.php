<?php
session_start();

// Gather data from the $_POST
$subTenKG = isset($_POST['subTenKG']) ? $_POST['subTenKG'] : 0;
$overTenKG = isset($_POST['overTenKG']) ? $_POST['overTenKG'] : 0;

// Storing data in session variables for bag weight 
$_SESSION['subTenKG'] = $subTenKG;
$_SESSION['overTenKG'] = $overTenKG;

// Redirect to finalStep.php
header('Location: finalStep.php');

exit;
?>
