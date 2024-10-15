<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>LOGIN PAGE</title>
</head>
<body> 

    <h2> LOGIN PAGE </h2>
    
    <form action="authenticate.php" method="post">
       <input type="text" name="username" id="" placeholder="Enter Username" required>
       <br><br>
       <input type="password" name="password" id="" placeholder="Enter Password" required>
       <br><br>
       <input type="submit" name="LOGIN" value="login" required>
       </form>
</body>
</html>