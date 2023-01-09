<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styleabout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:5%;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
    height: 100%;
    line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("/w3images/mac.jpg");
    min-height: 100%;
    }

    .w3-bar .w3-button {
    padding: 16px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header" style="margin: top 0 ;">
    <a class="navbar-brand" href="flyce_jobs.php">
      <img src="images/img1.jpeg" style="border-radius: 15px; width:100%; height:350%;">
    </a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li class="active" id="s" style = "margin-right: 40px;"><a href="flyce_jobs.php">Home</a></li>
    </ul>
  </div>
</nav>

<div class="w3-row-padding w3-center" style="margin-top:64px;">
    <div class="col-sm-4">
      <div class="w3-card">
        <h4>indeed</h4>
        <a 
          data-gtm-type="card"
          data-gtm-allowed-actions="click"
          class="people-card__image gtm-track-element"
          href="indjob.php"
          target="_blank"
        >
          <img class="people-card__img" src="images/img29.jpeg" style="width:36%">
        </a>   
      </div> 
    </div>

    <div class="col-sm-4">
      <div class="w3-card">
        <h4>naukari.com</h4>
        <a 
          data-gtm-type="card"
          data-gtm-allowed-actions="click"
          class="people-card__image gtm-track-element"
          href="naukjob.php"
          target="_blank"
        >
          <img class="people-card__img" src="images/img30.jpeg" style="width:50%">
        </a>    
      </div>
    </div>

    <div class="col-sm-4">
      <div class="w3-card">
        <h4>Monster</h4>
        <a 
          data-gtm-type="card"
          data-gtm-allowed-actions="click" 
          class="people-card__image gtm-track-element" 
          href="monsterjob.php" 
          target="_blank"
        >
          <img class="people-card__img" src="images/img31.jpeg" style="width:47%;">
        </a>    
      </div>
    </div>
   </div>
</div>
</body>
</html>
