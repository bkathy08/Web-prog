<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Calorie Count</title>
    <style>

        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #fce4ec; }
        .container { max-width: 500px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #d81b60; }
        label { display: block; margin-top: 10px; color: #8e24aa; }
        input, button { width: 100%; padding: 10px; margin-top: 10px; box-sizing: border-box; border-radius: 4px; border: 1px solid #e1bee7; }
        button { background-color: #ab47bc; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #8e24aa; }
        .result { margin-top: 20px; padding: 10px; border-radius: 4px; }
        .error { color: #d32f2f; background-color: #f8d7da; }
        .success { color: #388e3c; background-color: #e8f5e9; }
    </style>



    <div class="container">
        <h1>Daily Calorie Count</h1>
        <form action="kk.php" method="post">
            <label for="breakfast">Calories for Breakfast:</label>
            <input type="number" id="breakfast" name="breakfast" placeholder="Breakfast calories" min="0" />

            <label for="lunch">Calories for Lunch:</label>
            <input type="number" id="lunch" name="lunch" placeholder="Lunch calories" min="0" />

            <label for="dinner">Calories for Dinner:</label>
            <input type="number" id="dinner" name="dinner" placeholder="Dinner calories" min="0" />

            <button type="submit">Calculate Total Calories</button>
        </form>

</head>
</body>
</html>