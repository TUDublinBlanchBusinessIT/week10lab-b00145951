<?php
session_start();

// Gather data from the $_POST
$subTenKG = isset($_POST['subTenKG']) ? intval($_POST['subTenKG']) : 0;
$overTenKG = isset($_POST['overTenKG']) ? intval($_POST['overTenKG']) : 0;

// Storing data in session variables for bag weight 
$_SESSION['subTenKG'] = $subTenKG;
$_SESSION['overTenKG'] = $overTenKG;

// Redirect to finalStep.php
header('Location: finalStep.php');

exit;
?>
