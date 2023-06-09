<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="ASSETS/css/style.css">
    <title> login</title>
  </head>
  <body>
    <main id="container">
      <form id="login_form" method="POST" action="ASSETS/rotinas/auth.php" class="border rounded p-4 border-primary login-form">
        <div id="form_header">
          <h1>Login</h1>
          <i id="mode_icon" class="fa-regular fa-moon"></i>
        </div>
        <div id="inputs">
          <div calss="input_box">
          </div>
          <label for="e-mail"> 
            E-mail
            <div class="input-field">
              <i class="fa-regular fa-envelope"></i>
              <input typ="text" required id="e-mail" name="e-mail">
            </div>
          </label>
        </div>
        <label for="password"> 
          Password
          <div class="input-field">
            <i class="fa-solid fa-key fa-rotate-270"></i>

             <input typ="password" required id="password" name="password">
          </div>
        </label>
      
        <div id="forgot_password">
          <a href="#"> 
          Forgot your password?
        </a><br></br>
          <div id="social_media">
          <a href="#">
            <img src="assets/img/facebook.png" alt="facebook_logo" />
          </a>
          <a href="#">
            <img src="assets/img/google.png" alt="google_logo" />
          </a>
          <a href="#">
            <img src="assets/img/github.png" alt="github_logo" />
          </a>
        </div>
        </div>
        
        </div>
        </div>
        <button type="submit" id="login_button" name="login_button">
         Login 
        </button>
        <button type="submit" id="cadastro_button"> <a href="cadastro.php">
          Cadastrar 
         </a></button>
      </form>
    </main>
    <script type="text/javascript" src="ASSETS/js/script.js"></script>
  </body>
</html>
