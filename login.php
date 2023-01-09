<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href="images/ic.jpg" sizes="300x400 ">
    <title>Flyce Job | login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        }

        button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        }

        button:hover {
        opacity: 0.8;
        }

        .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
        }

        .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        }

        img.avatar {
        width: 40%;
        border-radius: 50%;
        }

        .container {
        padding: 16px;
        }

        span.psw {
        float: right;
        padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }
        .bg-image {    
            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);
            
            /* Full height */
            width: 100%;
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
         }

        /* Position text in the middle of the page/image */
            .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 2px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 30%;
            padding: 20px;
         
            }
    </style>
</head>
<body>
<img src="images/img1.jpeg" class="bg-image">
<div class="bg-text">
    <?php
        require('db.php');
        session_start();
        // When form submitted, check and create user session.
        if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: flyce_jobs.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } 
    else {
    ?>
    <form class="form" method="post" name="login">
        <h1 class="login-title" style="text-align:center;"><strong> Students Login</strong></h1>
        <form action="/action_page.php" method="post">
            <div class="imgcontainer">
                <img src="images/avtar.jpg" alt="Avatar" width="20%">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                    <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required>
              
                <label for="psw"><b>Password</b></label>
                    <input type="password" class="login-input" name="password" placeholder="Password"/>

                    <br>
                    <button type="submit" style="background-color: indigo;">Login</button>
            </div>
            <span><a href="hi3.php" style="color: white">...back</a></button>
            <span class="psw">Forgot <a href="help.php" style="color: white">password?   </a></span>
            <br>
            <br>
        </form>
        <?php
            }
        ?>
    </form>
</div>
</body>
</html>