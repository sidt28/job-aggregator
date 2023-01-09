<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
    .navbar
    {
      background-color:#484848;
    }
    .bottombar
    {
        position: fixed;
        bottom: 0;
        width: 100vw;
        display: flex;
        justify-content: center;
        background-color: #484848;
    }
    
    .coloured 
    {
        color: #fbc531 !important;
    }
      
    .navbar .navbar-nav .nav-link 
    {
        color: #fff;
    }
      
    .navbar .navbar-nav .nav-link:hover 
    {
        color: #fbc531;
    }
      
    .navbar .navbar-nav .active > .nav-link 
    { 
      color: #fbc531;
    }
      
     /* Arama */
    .search-btn { background-color: #fff; }
    .search-btn:hover { background-color: #ffc107; }
      
    .wrapper
     {
        margin-top: 2rem;
        margin-bottom: 1rem;
        max-width: 365px;
        background: #fff;
        border: 5px solid #ffc107;
        padding: 25px 25px 30px 25px;
        border-radius: 15px;
        box-shadow: 1px 7px 14px -5px rgba(0, 0, 0, 0.15);
        text-align: center;
      }
    .wrapper.hide
     {
        opacity: 0;
        pointer-events: none;
        transform: scale(0.8);
        transition: all 0.3s ease;
      }
    ::selection
     {
        color: #fff;
        background: #212529;
      }
    .wrapper img
     {
        max-width: 90px;
      }
    .content header
     {
        font-size: 25px;
        font-weight: 600;
      }
    .content
     {
        margin-top: 10px;
      }
    .content p
     {
        text-align: justify;
        color: #858585;
        margin: 5px 0 20px 0;
      }
    .content .buttons 
    {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .buttons button
     {
        padding: 10px 20px;
        border: none;
        outline: none;
        color: #212529;
        font-size: 16px;
        font-weight: 500;
        border-radius: 5px;
        background: #ffc107;
        cursor: pointer;
        transition: all 0.3s ease;
      }
    .buttons button:hover
    {
        transform: scale(0.97);
    }
    .buttons .item 
    {
        margin: 0 10px;
    }
    .buttons a
     {
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        color: #212529;
        background: #e9ecef;
      }
      
    #searches {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    </style>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />
    <title>
      Flyce Jobs | Job Aggregator
    </title>
    <link href="images/img1.jpeg" rel="icon" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
      
        <a class="navbar-brand">
          <img src="images/img1.jpeg" 
               style="border-radius: 15px; width:10%; height:35%;">
        </a>

        <li class="navbar-brand text-white" style="text-align: center;">
          Search
        </li>
        
        </button>
        <div class="collapse navbar-collapse" id="nvbCollapse">
          <!-- Arama -->
          <div>
           <!-- get method for mysql connection-->
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="Profile" value=" <?php if(isset($_GET['profile'])){echo $_GET['profile'];} ?>" class="form-control" placeholder="profile" id="profile-input">
                    <input type="text" name="Comapny" value="<?php if(isset($_GET['company'])){echo $_GET['company'];} ?>" class="form-control" placeholder="Comapny" id="company-input">      
                    <button class="btn btn-#ffd700 search-btn border-left-0 border-dark rounded-0" type="submit"> </button>
                </div>
            </form>
          </div>
          <!-- #Arama -->

          <ul class="navbar-nav ml-auto">
            <li class="nav-item pl-1">
              <a class="nav-link" href="flyce_jobs.php">Home</a>
              <a class="nav-link" href="option_page.php">Back</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- table creation -->
    <div class="col-md-12">
       <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Company name</th>
                            <th>Experience</th>
                            <th>Job description</th>
                            <th>Salary</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <!--php used to make a connection with local host database-->
                    <tbody>
                        <?php
                        $con = new mysqli("localhost","","","monj");
                        if ($con -> connect_errno)
                         {
                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                            exit();
                          }
                              // live nested query  
                                $filter = isset($_GET['profile'])?$_GET['profile']:'';
                                $filter2 = isset($_GET['Comapny'])?$_GET['Comapny']:'';
                                $query = "SELECT * FROM sheet1 WHERE ";
                                if(strcmp($filter,'')!=0){
                                    $query.="Job_title LIKE '%$filter%' ";
                                }
                                if(strcmp($filter2,'')!=0 && strcmp($filter,'')!=0){
                                    $query.=" and ";
                                }
                                if(strcmp($filter2,'')!=0){
                                    $query.="Name LIKE '%$filter2%' ";
                                }
                                if(strcmp($filter2,'')==0 && strcmp($filter,'')==0){
                                    $query = "SELECT * FROM sheet1";
                                }

                                $query_run = mysqli_query($con, $query);
                                  // if(!$query_run)
                                  // {
                                  //   printf("Error : %s\n", mysqli_error($con));
                                  //   exit();
                                  // }
                                        while($arr = mysqli_fetch_array($query_run)){
                                        ?>
                                        <!-- calling all the collumns -->
                                        <tr>
                                            <td><?= $arr['S.no'];?></td>
                                            <td><?= $arr['Name'];?></td>
                                            <td><?= $arr['Exp'];?></td>
                                            <td><?= $arr['job_title'];?></td>
                                            <td><?= $arr['Salary'];?></td>
                                            <td><?= $arr['location'];?></td>
                                        </tr>
                                        <?php
                                    }
                                    $ab = mysqli_num_rows($query_run);
                                    if($ab <=0){
                                        echo "<tr>
                                        <td colspan='5'>No Record Found</td>
                                        </tr>";
                                    }
                                    ?>
                                    <!-- closure     -->
                    </tbody>
                </table>
            </div>
       </div>         
    </div>
    <div class="bottombar">
    <p class="navbar-brand text-white" href="#"></p>
      <p class="navbar-brand text-white coloured">
        Contact - +91 XXXXXXXXXX xyz@gmail.com
      </p>
  </div>
</script>
</body>
</html>