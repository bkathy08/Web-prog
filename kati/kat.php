<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kat.css">
    <title>Daily Calorie Count</title>
    
    <div class="container">
        <h1>Daily Calorie Count</h1>
        <form action="kk.php" method="post">
            <label for="breakfast">Calories for Breakfast:</label>
            <input type="number" id="breakfast" name="breakfast" placeholder="Breakfast calories" min="0" required />
            <label for="lunch">Calories for Lunch:</label>
            <input type="number" id="lunch" name="lunch" placeholder="Lunch calories" min="0"  required/>
            <label for="dinner">Calories for Dinner:</label>
            <input type="number" id="dinner" name="dinner" placeholder="Dinner calories" min="0" required />
            <button type="submit">Calculate Total Calories</button>
        </form>
</head>
</body>
</html>