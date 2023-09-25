<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.6.0">
  <meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/main.css">
     <title>Chess Connect</title>

    <script src="three.r134.min.js"></script>
    <script src="vanta.dots.min.js"></script>
    <script>
    VANTA.DOTS({
      el: "#vanta",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      color: 0xcf077,
      color2: 0x20f1ff,
      spacing: 37.00
    })
    </script>
	
</head>
<body>
  	<!-- Navigation Bar should be placed at the top so have it be the first thing in the body -->
    <div class="container">
      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Chess Connect</a>
        <div class="navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--end of nav-->
    <?php 
      echo "hello";
      ?>
    
	<!-- <img src="https://i.redd.it/j8ldvox5ep891.jpg" > -->


  <!-- Main Content -->
  <div class="vanta" > test</div>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <h1>Welcome to Chess Connect!</h1>
        <p>Find your queen.</p>
        <div class="chess-piece chess-piece1">
          <img src="https://pics.clipartpng.com/Pawn_White_Chess_Piece_PNG_Clip_Art-2751.png" class="image-pawn" />
        </div>
        <div class="chess-piece chess-piece2">
          <img src="https://pics.clipartpng.com/Pawn_White_Chess_Piece_PNG_Clip_Art-2751.png" class="image-pawn" />
        </div>
      </div>
    </div>
  </div>
</body>
</html>
