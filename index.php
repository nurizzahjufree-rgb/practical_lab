<?php
include "process.php";
//check if the form is submitted dan ada value atau tak
// if (isset($_POST['calculate'])){
// echo "The input for the first kWh: " . $_POST['first'];

// $firstkwh = $_POST['first'];
// $secondkwh = $_POST['second'];
// $thirdkwh = $_POST['third'];
// $fourthkwh = $_POST['fourth'];
// $fifthkwh = $_POST['fifth'];

// $firstcharge = $firstkwh * 0.218 ;
// $secondcharge = $secondkwh * 0.334;
// $thirdcharge = $thirdkwh * 0.516;
// $fourthcharge = $fourthkwh * 0.546;
// $fifthcharge = $fifthkwh * 0.571;

// echo"<br>The charge for the first kWh: RM". $firstcharge;
// echo"<br>The charge for the second kWh: RM" .$secondcharge;
// echo"<br>The charge for the third kWH: RM" . $thirdcharge;
// echo"<br>The charge for the fourth kWh: RM" . $fourthcharge;
// echo"<br>The charge for the fifth kWh: RM" . $fifthcharge;
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electricity Bill</title>
</head>
<body>
    <h1>Calculate House Electricity Table</h1>

    <?php
    //display error message if there is any
    if ($error != ""){
        echo "<h3 style='color: red;'>" . $error . "</h3>";
    }
    ?>

    <div style ="margin: 50px">
        <table border ="1">
            <tr>
        <th>Block Tariff (per month)</th>
        <th>Unit</th>
        <th>Rate</th>
</tr>
<tr>
    <td>For the first 200kWh (1-200 kWh) per month</td>
    <td>sen/kWh</td>
    <td>0.218</td>
</tr>

<tr>
    <td>For the first 100kWh (201-300 kWh) per month</td>
    <td>sen/kWh</td>
    <td>0.344</td>
</tr>

<tr>
    <td>For the first 300kWh (301-600 kWh) per month</td>
    <td>sen/kWh</td>
    <td>0.516</td>
</tr>

<tr>
    <td>For the first 300kWh (601-900 kWh) per month</td>
    <td>sen/kWh</td>
    <td>0.546</td>
</tr>

<tr>
    <td>For the first 300kWh (901 kWh) per month</td>
    <td>sen/kWh</td>
    <td>0.571</td>
</tr>
<tr>
    <td colspan ="3"> The minimum monthly chafe is RM300</td> 
</tr>
</table>

<br>

<div>
<form action="" method="post">
    <label for="">Enter your first 200 kWh(1 - 200 kWh) per month</label>
<input type="number" name="first" id="" >
<br>



    <label for="">Enter next 100 kWh(201 - 300 kWh) per month</label>
<input type="number" name="second" id="" >
<br>


    <label for="">Enter next 300 kWh(301 - 600 kWh) per month</label>
<input type="number" name="third" id="" >
<br>


    <label for="">Enter next 300 kWh(601 - 900kWh) per month</label>
<input type="number" name="fourth" id="" >
<br>


    <label for="">Enter next kWh(901 kWh onwards) per month</label>
<input type="number" name="fifth" id="" > <br>

<input type="submit" name="calculate" value="Calculate">
<input type="submit" name="reset" value="Reset">
</form>


</div>


</body>
</html>

<?php

if($showBill){
    echo "<hr>";//horizontal line
    echo "<h1> My Electricity Bill</h1><br><br>";

    echo "First input: " . $firstkwh . " * 0.218 = RM" . $firstcharge . "<br>"; 
    echo "Second input: " . $secondkwh . " * 0.344 = RM" . $secondcharge . "<br>";
    echo "Third input: " . $thirdkwh . " * 0.516 = RM" . $thirdcharge . "<br>";
    echo "Fourth input: " . $fourthkwh . " * 0.546 = RM" . $fourthcharge . "<br>";
    echo "Fifth input: " . $fifthkwh . " * 0.571 = RM" . $fifthcharge . "<br>";

    echo "Total kWh: " . $totalkwh . "kwh <br>";
    echo "Total Charge: " . $totalcharge . "<br>";
    echo "Total SST: " . $sst . "<br>";
    echo "Total Bill: " . $totalBill . "<br>";
    
}

?>