<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $available = $_POST['available'] ?? 'Not specified';
    $day = $_POST['day'] ?? 'Not specified';
    $time = $_POST['time'] ?? 'Not specified';
    $preference = $_POST['preference'] ?? 'Not specified';
    $confirmation = $_POST['confirmation'] ?? 'Not specified';

    // Format the data
    $data = "Hangout Details:\n";
    $data .= "Available: $available\n";
    $data .= "Day: $day\n";
    $data .= "Time: $time\n";
    $data .= "Preference: $preference\n";
    $data .= "Confirmation: $confirmation\n";
    $data .= "---------------------------\n";

    // Save to a file
    $file = 'hangoutDetails.txt';
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect to a thank you page or display a message
    echo "Thank you Kombong! I have received your responses! ";
} else {
    echo "Invalid request.";
}
?>
