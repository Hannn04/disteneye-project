<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destineye</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link rel="stylesheet" href="../css/masuk.css" />
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="../controller/auth.php" method="post">
        <div class="txt_field">
          <input type="text" name="email" />
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" />
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="login" />
        <div class="signup_link">Login as <a href="../auth/?login-admin">Admin</a></div>
        <div class="signup_link">Don't have an account? <a href="../auth/register.php">Signup</a></div>
      </form>
    </div>
  </body>
</html>
