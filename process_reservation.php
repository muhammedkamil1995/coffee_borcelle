<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["form-date-year"] . '-' . $_POST["form-date-mm"] . '-' . $_POST["form-date-dd"];
    $time = $_POST["form-time-hh"] . ':' . $_POST["form-time-mm"] . ' ' . $_POST["form-time-ampm"];
    $people = $_POST["form-people-qty"];


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO reservations (name, email, date, time, people) VALUES ('$name', '$email', '$date', '$time', $people)";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Reservation Details:</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Date: $date</p>";
        echo "<p>Time: $time</p>";
        echo "<p>People: $people</p>";
        echo "<p>Reservation book successfully, login to print out your reservation recipt.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>