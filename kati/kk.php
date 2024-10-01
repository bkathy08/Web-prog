<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kk.css">
    <title>KATHY D. BAGAMASBAD</title>
</head>
<body>
    <div class="kathycutie">
    <h1>Calories Intake</h1>   
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $breakfast = isset($_POST['breakfast']) ? intval($_POST['breakfast']) : 0;
    $lunch = isset($_POST['lunch']) ? intval($_POST['lunch']) : 0;
    $dinner = isset($_POST['dinner']) ? intval($_POST['dinner']) : 0;
    
    $totalCalories = $breakfast + $lunch + $dinner;
    $resultClass = '';
    $resultMessage = '';
    echo "Breakfast : $breakfast calories <br>  <br>";
    echo "Lunch : $lunch calories <br> <br>";
    echo "Dinner : $dinner calories <br> <br>";
    echo "Total Calories is $totalCalories <br><br>";
    
    if ($totalCalories < 1500) {
        $resultMessage = "Your Total Calorie Intake is Very Low. Consider Increasing Your Intake.";
    } elseif ($totalCalories >= 1500 || $totalCalories <= 2000) {
        $resultMessage = "Your Total Calorie Intake is within the Recommended Range.";
    } else if ($totalCalories == 0){
        $resultClass = "take some energy dude manigga";
    }
    else {
        echo"Invalid input";
    }
    
    echo "The Result $resultClass $resultMessage " ; 

}
?>
    </div>

    <button> <a href="kat.php"> <button></button></a>
</body>
</html>