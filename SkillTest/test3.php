<!DOCTYPE html>
<html>

<head>
    <title>PHP Greeting</title>
</head>
<body>
    <?php
    // it checks if the form is submitted by using the POST METHOD
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);

        // check if the name is not empty
        if (!empty(trim($name))) {
            echo "G'day, " . $name . "! Nice to meet you!";
        }
        // if empty, show error message
        else {
            echo "Please enter your name.";
        }

    }

    ?>
    <!-- HTML form for user input -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>

</body>
</html>