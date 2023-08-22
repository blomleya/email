<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["user_email"];

    // Validate email (you can add more validation here)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = fopen("emails.txt", "a"); // Open the file in append mode
        fwrite($file, $email . "\n"); // Write email to the file
        fclose($file); // Close the file

        echo "Email stored successfully!";
    } else {
        echo "Invalid email format.";
    }
}
?>
