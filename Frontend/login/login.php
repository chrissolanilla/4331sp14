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
<body class="background-image2"> <!-- Apply background class to the body -->   
    <div class="container vertical-center"> <!-- Add the vertical-center class to center vertically -->
</head>
<body>
            <!-- Navigation Bar should be placed at the top so have it be the first thing in the body -->
            <div class="container">
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <a class="navbar-brand" href="../#">Chess Connect</a>
                <div class="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" >Login</a>
                    </li>
                </ul>
                </div>
            </nav>
        </div>
        <!--end of nav-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="process-login.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <p class="signup-text">Don't have an account? <a href="register">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
