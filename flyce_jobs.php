<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Flyce Jobs | Job Aggregator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="images/img1.jpeg" rel="icon" />
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
<!--navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="collapse navbar-collapse" id="myNavbar">
    <div class="navbar-header" style="margin: top 0 ;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://localhost/jobagg/"><img src="images/img1.jpeg" style="border-radius: 15px; width:100%; height:350%;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active" id="s"><a href="#myCarousel">Home</a></li>
        <li><a href="#top">Top Jobs</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="option_page.php">Searches</a></li>
        <li><a href="#team">Contact</a></li>
        <li>
        <p class="w3-large">
          <button class="w3-button w3-round w3-orange w3-opacity w3-hover-opacity-off" style = "margin-right: 40px;"><?php echo $_SESSION['username']; ?>!</button>
        </p>
      </li> 
      </ul>
    </div>
  </div>
</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/img46.jpeg" style="height:50%">
        <div class="carousel-caption">
        <h3><a href="#exp"><button type="button" class="w3-button w3-round w3-orange w3-opacity w3-hover-opacity-off">Explore</button></a>        
        </h3>
        </div>      
      </div>

      <div class="item">
        <img src="images/img47.jpeg" style="height:50%">
        <div class="carousel-caption">
        <h3><a href="#exp"><button type="button" class="w3-button w3-round w3-orange w3-opacity w3-hover-opacity-off">Explore</button></a> 
        </h3>        
      </div>      
      </div>

      <div class="item">
        <img src="images/img48.jpeg" style="height:50%">
        <div class="carousel-caption">
          <h3><a href="#exp"><button type="button" class="w3-button w3-round w3-orange w3-opacity w3-hover-opacity-off">Explore</button></a> 
          </h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<!-- top job section -->
<div class="w3-container" style="padding:128px 16px" id="top">
  <h3 class="w3-center" style="font-size:250%;">Top Job Sites</h3>
  <p class="w3-center w3-large">Find the best one for you ;)</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px;">
    <div class="col-sm-4">
      <div class="w3-card">
        <h4> linkdin</h4>
        <a data-gtm-type="card" data-gtm-allowed-actions="click" class="people-card__image gtm-track-element" href="https://www.linkedin.com/company/linkedin/" target="_blank">
        <img class="people-card__img" src="images/img28.jpeg" style="width:30%">
        </a> 
      </div>
    </div>   
 

    <div class="col-sm-4">
      <div class="w3-card">
        <h4>indeed</h4>
        <a data-gtm-type="card" data-gtm-allowed-actions="click" class="people-card__image gtm-track-element" href="https://in.indeed.com/" target="_blank">
        <img class="people-card__img" src="images/img29.jpeg" style="width:36%">
        </a>   
      </div> 
    </div>

    <div class="col-sm-4">
      <div class="w3-card">
        <h4>naukari.com</h4>
        <a data-gtm-type="card" data-gtm-allowed-actions="click" class="people-card__image gtm-track-element" href="https://www.naukri.com/" target="_blank">
        <img class="people-card__img" src="images/img30.jpeg" style="width:50%">
        </a>    
      </div>
    </div>

    <div class="col-sm-4">
      <div class="w3-card">
        <h4>Monster</h4>
        <a data-gtm-type="card" data-gtm-allowed-actions="click" class="people-card__image gtm-track-element" href="https://www.monsterindia.com/" target="_blank">
        <img class="people-card__img" src="images/img31.jpeg" style="width:47%;">
        </a>    
      </div>
    </div>

    <div class="col-sm-4">
      <div class="w3-card">
        <h3>flexjobs</h3>
        <a data-gtm-type="card" data-gtm-allowed-actions="click" class="people-card__image gtm-track-element" href="https://www.flexjobs.com/" target="_blank">
        <img class="people-card__img" src="images/img32.jpeg" style="width:20%">
        </a>    
      </div>
    </div>
   </div>
</div>

<!-- About our Website" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="about">
<div class="w3-content">
    <h1 class="w3-center w3-text-green" style="font-size:3vw"><b>About Our Website</b><span style="margin-left:10%"><img src="images/img1.jpeg" style="border-radius: 25px; width:30%; height:50%;"></span></h1>
    <!--<img class="w3-padding w3-opacity-min" src="img" style="width:20%;margin:32px 0">-->
    <p style="font-size:150%"><i>What we are
 is a job search engine designed to make the process of finding a job on the internet easier for the user. It maps the huge selection of job offerings available on the internet in one extensive database by referencing job listings originating from job boards, recruitment agency websites and large specialist recruitment sites. Using a fast and straightforward interface, users can query this database and save themselves the trouble of visiting each site individually. The job offerings themselves are not hosted by flyce jobs and users are always redirected to the original job listing. Essentially, flyce jobs acts as traffic driver to those sites.
flyce jobs job search engine network encompasses over different places in India, featuring separate interfaces that are translated into 28 languages.
</p>
<p style="font-size:150%">
Our technology
flyce jobs uses smart agents running on a cluster of networked computers that scan the web and identify job listings on the internet such as on small recruitment agencies websites which may only display few jobs or on larger job boards that feature thousands of jobs. Those listings are then scanned daily and the jobs found are added to the job index. Over 58,000 websites are scanned every day.
</p><br>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this website</p>
  <div class="w3-row-padding" style="margin-top:64px">
  <div class="w3-row-padding w3-center" style="margin-top:64px;">
    <div class="col-sm-6 w3-margin-center">
      <div class="w3-card">
        <img class= "people-card__img" src="images/img25.jpeg" alt="Person 1" style="width:51%">
        <div class="w3-container">
          <h3>Person 1</h3>
          <p class="w3-opacity">Designation</p>
          <p>Place</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i><a herf="Drishtisharma33@gmail.com">Contact</a></button></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 w3-margin-bottom">
      <div class="w3-card">
        <img class="people-card__img" src="images/img26.jpeg" alt="Person 2" style="width:30%">
        <div class="w3-container">
          <h3>Person 2</h3>
          <p class="w3-opacity">Designation</p>
          <p>Place</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"><a herf="Drishtisharma33@gmail.com"></i> Contact</a></button></p>
        </div>
      </div>
    </div>
   </div>
  </div>
</div>

<!--Explore sectiion-->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="exp">
  <h3 class="w3-center">Top Companies</h3>
  <p class="w3-center w3-large">"Love the job, not the Company"</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px;">
    <div class="col-sm-6 w3-margin-center">
      <div class="w3-card">
        <img class= "people-card__img" src="images/img33.jpeg" alt="google" style="">
        <h3>Google</h3>
          <p class="w3-opacity">We are here to inform you that Google recruiters are looking for skilled candidates to attain the Software Engineer and Android Developer positions. Also, job seekers who are looking for Google Careers can check this page. Interested candidates of Any Bachelors Degree can make their career in Google can check this post very deliberately because you can get some precise data related to Jobs For Freshers In Google.</p>
        <div class="w3-container">
        </div>
      </div>
    </div>

    <div class="col-sm-6 w3-margin-center">
      <div class="w3-card">
        <img class= "people-card__img" src="images/img38.jpeg" alt="accenture" style="">
        <h3>Accenture</h3>
          <p class="w3-opacity">Are you passionate to work in the Technology field and want to enhance your technical skills? then you are in the right place. Accenture is providing a great chance for the candidates who are trying for the job. Accenture Recruitment 2022 is going to conduct an Accenture Recruitment for freshers to recruit the contenders for various vacant positions in the organization.            
          </p>
        <div class="w3-container">
        </div>
      </div>
    </div>

    <div class="w3-row-padding w3-center" style="margin-top:64px;">
    <div class="col-sm-6 w3-margin-center">
      <div class="w3-card">
        <img class= "people-card__img" src="images/img37.jpeg" alt="google" style="">
        <h3>Paytm</h3>
          <p class="w3-opacity">It is India's leading financial services company that offers full-stack payments & financial solutions to consumers, offline merchants and online platforms. The company is on a mission to bring half a billion Indians into the mainstream economy through payments, commerce, banking, investments, and financial services. One97 Communications Limited that owns the brand Paytm is founded by Vijay Shekhar Sharma and is headquartered in Noida, Uttar Pradesh. Its investors include Softbank, Ant Financial, AGH Holdings, SAIF Partners, Berkshire Hathaway,

T Rowe Price, and Discovery Capital.</p>
        <div class="w3-container">
        </div>
      </div>
    </div>


    <div class="col-sm-6 w3-margin-center">
      <div class="w3-card">
        <img class= "people-card__img" src="images/img39.jpeg" alt="accenture" style="">
        <h3>Amazon</h3>
          <p class="w3-opacity"> We develop the technology that Amazon uses to deliver orders as quickly, accurately, and cost effectively as possible into the hands of our customers. We streamline our processes using the latest applications in science, machine learning, and scalable software on the cloud. We are constantly evolving to raise the bar on the customer experience.

We are looking for diverse people who like solving problems, enjoy working with customers around the world, and have technical backgrounds from a variety of different fields.          </p>
        <div class="w3-container">
        </div>
      </div>
    </div>
    
    <div class="col-sm-6 w3-margin-center">
      <div class="w3-card">
        <img class= "people-card__img" src="images/img17.jpeg" alt="accenture" style="">
        <h3>Uber</h3>
          <p class="w3-opacity">At Uber we’re reimagining the way the world moves for the better. That means being bold in our decisions and building for something bigger. For us, all of that starts with helping people go anywhere and get anything: cars, takeout, motorcycles, groceries, bikes, people, scooters, items, trucks, buses. It’s what we know and what we do best. And we do it at the speed of now.

That’s why people want to join us: because our solutions are implemented in real time and on thousands of city streets, they are a boon and a career to people all over the globe. The scope of this work means Uber will challenge you - put you up against complex problems that require ambitious solutions. We need bold people who can build with heart, who will chase solutions with fearless optimism. We are Uber. Are you?          </p>
        <div class="w3-container">
        </div>
      </div>
    </div>

   </div>
  </div>
</div>
  </div>
</div>
  

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64" id="i">
  <a href="#myCarousel" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
} 
</script>

</body>
</html>