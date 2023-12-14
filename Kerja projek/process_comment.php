<?php
// Establish a connection to the MySQL database
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'portfolio';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Insert data into the 'comments' table
    $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

    if ($conn->query($sql) === TRUE) {
        
            echo "<script>
            alert('Feedback berhasil di kirim, Terimakasih atas masukannya');
            window.location='index copy.php';
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
