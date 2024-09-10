


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Images Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content"> 
            <form action="./login.php" method="Post">
            <?php
include "Backend/log.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL query
    $stmt = $conn->prepare('SELECT * FROM users WHERE user_name = ? AND password = ?');

    // Bind the parameters
    $stmt->bind_param('ss', $username, $password);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a row exists
    if ($result->num_rows > 0) {
        // Login successful, add user to session
        session_start();
        $_SESSION['user_name'] = $username;
        header('Location: ./addUser.php'); // redirect to addUsers.php
        exit;
    } else {
        // Login failed, display error message
        $error = 'Invalid username or password';
    }
}

// Close the connection
$conn->close();
?>

              <h1>Login Form</h1>
                    <div>
                <input type="text" name="username" class="form-control" placeholder="username" required="" />
              </div>
              <div>
                <input type="password" name="password"  class="form-control" placeholder="Password" required="" />
              </div>
              <div>
              <input type="submit" class="btn btn-default submit" name="submit" value="Log in">
              
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-file-image-o"></i></i> Images Admin</h1>
                  <p>©2016 All Rights Reserved. Images Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
              
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">

            <form action="Backend/create.php" method="Post" >
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Fullname" required="" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit"  href="">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-file-image-o"></i></i> Images Admin</h1>
                  <p>©2016 All Rights Reserved. Images Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>