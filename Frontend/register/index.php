<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Login - Chess Contact Manager</title>
    <style>
        /* Custom CSS to vertically center the login container */
        .vertical-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100vh; /* Set a minimum height to fill the viewport */
        }

        .card {
            color: white;
        }

        .card-header {
            font-size: 30px;
            font-weight: bold;
        }

        /* Add custom CSS for the "Don't have an account?" text */
        .signup-text {
            text-align: center; /* Horizontal alignment */
            margin-top: 15px; /* Adjust the margin as needed */
        }
    </style>
</head>

</head>
<body class="background-image2"> <!-- Apply background class to the body -->   
    <div class="container vertical-center"> <!-- Add the vertical-center class to center vertically -->
    <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form method="POST" action="process-register.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName">
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country">
                            </div>
                            <div class="mb-3">
                                <label for="chessRating" class="form-label">Chess Rating</label>
                                <input type="number" class="form-control" id="chessRating" name="chessRating">
                            </div>
                            <div class="mb-3">
                                <label for="favoriteOpening" class="form-label">Favorite Opening</label>
                                <input type="text" class="form-control" id="favoriteOpening" name="favoriteOpening">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <!-- Add fields for other user information (email, country, etc.) -->
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
