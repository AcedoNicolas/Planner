<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];


        header("location: reset.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    
  <div class="form">

    <h1>Reset Your Password</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Reset</button>
    </form>
  </div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../js/index.js"></script>
</body>

</html>
