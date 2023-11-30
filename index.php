<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>
<form action="" method="POST">
          <h2>Login Form</h2> 
        
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" placeholder="Username" name="user">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>

</form>
          <?php
              if(isset($_POST["login"])){
                if($_POST["user"] === "amad" && $_POST["pass"] === "04"
                || $_POST["user"] === "kynnsteak" && $_POST["pass"] === "kynn"){
                  header("location: home.php");
              }else{
                echo"
                    <script>
                    alert('user atau password salah')                   
                    </script>";
              }
            }

              ?>
            
      </div>
  </head>
  </html>