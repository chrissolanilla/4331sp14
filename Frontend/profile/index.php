<?php
// Start the session
session_start();

// Check if the user is logged in, if not redirect to the login page
if (!isset($_SESSION["username"])) {
    header("Location: login/");
    exit();
}

// Fetch user details from the session
$userDetails = [
    "username" => $_SESSION["username"],
    "email" => $_SESSION["email"],
    "country" => $_SESSION["country"],
    "first_name" => $_SESSION["first_name"],
    "last_name" => $_SESSION["last_name"],
    "phone" => $_SESSION["phone"],
    "chess_rating" => $_SESSION["chess_rating"],
    "favorite_opening" => $_SESSION["favorite_opening"],
    "title" => $_SESSION["title"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>User Profile</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Username</th>
                    <td><?php echo htmlspecialchars($userDetails["username"]); ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo htmlspecialchars($userDetails["email"]); ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><?php echo htmlspecialchars($userDetails["country"]); ?></td>
                </tr>
                <tr>
                    <th>First Name</th>
                    <td><?php echo htmlspecialchars($userDetails["first_name"]); ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo htmlspecialchars($userDetails["last_name"]); ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo htmlspecialchars($userDetails["phone"]); ?></td>
                </tr>
                <tr>
                    <th>Chess Rating</th>
                    <td><?php echo htmlspecialchars($userDetails["chess_rating"]); ?></td>
                </tr>
                <tr>
                    <th>Favorite Opening</th>
                    <td><?php echo htmlspecialchars($userDetails["favorite_opening"]); ?></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><?php echo htmlspecialchars($userDetails["title"]); ?></td>
                </tr>
            </table>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
