<?php
  $signin = false;
  $error = false;
  $category = '';

    if(isset($_POST['signin'])) 
  {
    include'components\dbconnect.php';
    $email =$_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user_profile` WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
      while ($row = mysqli_fetch_assoc($result)) {
        if ($password == $row['password']) {
          session_start();
          $signin = true;
          $_SESSION['email'] = $row['email'];
          $_SESSION['id'] = $row['u_id'];
          $_SESSION['loggedin'] = true;
          $category = $row['Category'];
        }
        else {
          $error = "Invalid Email or Password";
        }

      }

    }
    else {
      $error = "Invalid Credentials";
    }
    
    echo $category;
    if ($category == 'user'){
      header("Location: navbar copy.php");
    }
    if ($category == 'admin'){
      header("Location: navbar.php");
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <style>
      body{
        background: #D9D9D9;
      }
        .gradient-custom {

        background: #D9D9D9;
        font-family: Roboto mono;

}

.custom{
    background-color: #B6BAD8;
    border: 0.5px solid;
    border-color: #424040;
}
.navbarcustom {
    background-color: transparent !important;
}
.btn-outline-custom{
    --bs-btn-color: #393939;
    --bs-btn-border-color: #858AB1;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #858AB1;
    --bs-btn-hover-border-color: #858AB1;
    --bs-btn-focus-shadow-rgb: 220, 53, 69;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #858AB1;
    --bs-btn-active-border-color: #858AB1;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #858AB1;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #858AB1;
    --bs-gradient: none;
}

    </style>

</head>
<body>
<div class="header">
    <?php
    if ($error !== false && $error !== null) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $error . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    ?>
</div>

 
    <div class="container-fluid">
              <nav class="navbar navbar-expand-sm mx-auto ml-2 navbarcustom">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="landingpage.php">
                      <img src="image\LOGO-01.png" alt="Logo" width="60px" height="auto">
                    </a>
                    
                  </div>
                </nav>
          
          
  </div>  

    <section class="vh-100 gradient-custom">
      <form action="signin.php" method="post">
        <div class="container py-5 h-100 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">
              <div class="card custom text border-0" style="border-radius: 2rem;">
                <div class="card-body p-5 ">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h3 class="fw-bold mb-2 text-uppercase">Sign In</h3>
                    <p class="text-50 mb-5">Please enter your email and password!</p>

                    
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label ml-3" for="email">Email</label>
                        <input type="email" name="email" class="form-control form-control-md" placeholder="Enter your email here" required>
                      
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" name="password" class="form-control form-control-md" placeholder="Enter your password here"required>
                      
                    </div>

                          
                    <button class="btn bttn btn-outline-custom btn-md text-uppercase px-5 col-sm-12 fs-3 rounded-5" type="submit" name="signin">Sign In</button>
    
      
                  </div>
      
                  <div>
                        <p class="mb-0">Don't have an account? <a href="signup.php" class="text-50 text-uppercase fw-bold text-decoration-none" style="color: #393939;">Sign Up</a>
                        </p>
                      </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>