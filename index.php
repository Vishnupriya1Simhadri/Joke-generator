<?php
// Array of jokes
$jokes = [
    "Why don’t skeletons fight each other? They don’t have the guts.",
    "I told my wife she was drawing her eyebrows too high. She looked surprised.",
    "I’m reading a book on anti-gravity. It’s impossible to put down.",
    "Why don’t some couples go to the gym? Because some relationships don’t work out.",
    "I used to play piano by ear, but now I use my hands."
];

// Select a random joke
$random_joke = $jokes[array_rand($jokes)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Joke Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Random Joke Generator</h1>
        <p class="joke"><?php echo $random_joke; ?></p>
        <form method="POST">
            <button type="submit" name="new_joke">Get a New Joke</button>
        </form>
    </div>
</body>
</html>
