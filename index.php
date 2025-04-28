<?php
// Initialize variables for name and age
$name = $age = "";
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input and sanitize it
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    // Validate inputs
    if (!empty($name) && !empty($age)) {
        // Create a personalized message
        $message = "Hello, $name! You are $age years old.";
    } else {
        $message = "Please enter bwwoth your name and age.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form App</title>
</head>
<body>
    <h1>Welcome to My PHP Web App</h1>

    <!-- Display the form -->
    <form action="index.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>
            
        <label for="age">Your Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $age; ?>" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <!-- Display the personalized message -->
    <h2><?php echo $message; ?></h2>
</body>
</html>
