<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<?php
// Establish a connection to the MySQL database
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'portfolio';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check if the user is logged in
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit;
}

// Logout functionality
if (isset($_GET['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header("Location: login.php");
    exit;
}

// Ensure the 'username' session variable is set before using it
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete comment if the delete button is clicked
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];

    // Delete the comment from the 'comments' table
    $deleteSql = "DELETE FROM comments WHERE id = $deleteId";

    if ($conn->query($deleteSql) === TRUE) {
        $deleteMessage = "Comment deleted successfully";

    } else {
        $deleteMessage = "Error deleting comment: " . $conn->error;
    }
}

// Retrieve comments from the 'comments' table with the latest comments at the top
$selectSql = "SELECT * FROM comments ORDER BY id DESC";
$result = $conn->query($selectSql);
?>

<div id="sidebar" class="sidebar">
    <a href="admin.php?page=home"><i class="fas fa-home"></i> Home</a>
    <a href="admin.php?page=dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <div class="logout">
        <a href="admin.php?logout=1"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>

<?php
// Include the appropriate content based on the page requested
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include('home.php');
            break;
        case 'dashboard':
            include('dashboard.php');
            break;
        default:
            // Handle invalid page requests
            include('home.php'); // Default to home page
    }
} else {
    // Default to home page if no page is specified
    include('home.php');
}
?>

<button class="toggle-btn" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
</button>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        var home = document.getElementById('home');
        var mainContent = document.getElementById('main-content');
        var toggleBtn = document.querySelector('.toggle-btn');

        if (sidebar.style.width === '200px') {
            sidebar.style.width = '0';
            home.style.marginRight = '0';
            mainContent.style.marginRight = '0';
            toggleBtn.style.right = '15px';
        } else {
            sidebar.style.width = '200px';
            home.style.marginRight = '240px';
            mainContent.style.marginRight = '240px';
            toggleBtn.style.right = '225px';
        }
    }

    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus komentar ini?");
    }
</script>

<?php
// Close the database connection
$conn->close();
?>

</body>
</html>
