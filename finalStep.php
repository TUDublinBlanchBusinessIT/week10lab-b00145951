<?php
include("finalStepHeader.html");

//translate the comments below into PHP code underneath each comment

//start a session
session_start();
//echo the passenger's firstname from the appropriate session variable
echo "<h4>";


echo "Passenger's Firstname: " . $_SESSION['passengerFN'] . "<br>";

//echo the passenger's surname from the appropriate session variable

echo "Passenger's Surname: " . $_SESSION['passengerSN'] . "<br>";

// if the luggage session variable is on
if (isset($_SESSION['luggage'])) {
    
    //echo the amount of bags under ten kilos the passenger is bringing
    
    echo "Bags Under 10 KG: " . $_SESSION['subTenKG'] . "<br>";
    
    //echo the amount of bags over ten kilos the passenger is bringing
    echo "Bags Over 10 KG: " . $_SESSION['overTenKG'] . "<br>";
}
//end if block
echo "</h4></div></div>";
?>

</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
        
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
    
</form>

<?php
// If the confirm checkbox is ticked, redirect to confirm.php
if (isset($_POST['confirm'])) {
    header("Location: confirm.php");
    exit; //exits
}
?>