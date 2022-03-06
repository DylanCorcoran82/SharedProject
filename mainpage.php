<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MainPage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 400px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>IT Carlow's Clubs and Societies</h1>
        <br>
        <h2>Home Page</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <form action="/action_page.php">
  <label for="cars">Please choose from the list of clubs and societies you wish to sign up to</label>
                <br>
                <br>
                <p><a href="computing.php">Computing</a>.</p>
                <p><a href="dj.php">DJ</a>.</p>
                <p><a href="soccer.php">Soccer</a>.</p>
                <p><a href="basketball.php">Basketball</a>.</p>
                <p><a href="gaming.php">Gaming</a>.</p>
</form>
            <br>
            <br>
            <p>Wish to logout? <a href="logout.php">Logout here</a>.</p>
        </form>
    </div>    
</body>
</html>