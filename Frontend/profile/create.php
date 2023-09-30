<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = new mysqli("localhost", "newuser", "StrongerPassword123!", "chesscont");

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
       
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $country = $_POST["country"];
        $chessRating = $_POST["chessRating"];
        $favoriteOpening = $_POST["favoriteOpening"];
        $title = $_POST["title"];
        $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, phone, country, chess_rating, favorite_opening, title) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $firstName, $lastName, $email, $phone, $country, $chessRating, $favoriteOpening, $title);
        $stmt->execute();
}

?>
