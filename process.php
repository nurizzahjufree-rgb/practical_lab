<?php

$error = "";
$showBill = false;
//check if the form is submitted dan ada value atau tak
if(isset($_POST['calculate'])){
    // echo "The input for the first kwH: " . $_POST['first'];

    $firstkwh = $_POST['first'];
    $secondkwh = $_POST['second'];
    $thirdkwh = $_POST['third'];
    $fourthkwh = $_POST['fourth'];
    $fifthkwh = $_POST['fifth'];

    // if user input is empty, set the value to 0 so that it won't affect the calculation
    if($firstkwh == "")
        $firstkwh = 0;
    if($secondkwh == "")
        $secondkwh = 0;
    if($thirdkwh == "")    
        $thirdkwh = 0;
    if($fourthkwh == "")
        $fourthkwh = 0;
    if($fifthkwh == "")
        $fifthkwh = 0;

    // validation 2
    // check if the user input is a negative number
    if ($firstkwh < 0 || $secondkwh < 0 || $thirdkwh < 0 || $fourthkwh < 0 || $fifthkwh < 0) {
        $error = "Invalid input. Please enter a positive number.";
        // validation 3
        // check if the user input exceeds the maximum limit for each kWh
    } else if($firstkwh > 200)
        $error = "Invalid input. The first kWh should not exceed 200.";
    else if($secondkwh > 100)
        $error = "Invalid input. The second kWh should not exceed 100.";
    else if($thirdkwh > 300)
        $error = "Invalid input. The third kWh should not exceed 300.";
    else if($fourthkwh > 300)
        $error = "Invalid input. The fourth kWh should not exceed 300.";
    else if ($firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh == 0) {
        $error = "Please enter at least one value";
    } else {

    $firstcharge = $firstkwh * 0.218;
    $secondcharge = $secondkwh * 0.344;
    $thirdcharge = $thirdkwh * 0.516;
    $fourthcharge = $fourthkwh * 0.546;
    $fifthcharge = $fifthkwh * 0.571;

    //total kwh
    $totalkwh = $firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh;
    //total rm
    $totalcharge = $firstcharge + $secondcharge + $thirdcharge + $fourthcharge + $fifthcharge;
    //total sst; 6% if above 600kwh
    if($totalcharge > 600) {
        $sst = $totalcharge * 0.06;

} else {
    $sst = 0;
}
    $totalBill = $totalcharge + $sst;
    $showBill = true;

}
} 
?>