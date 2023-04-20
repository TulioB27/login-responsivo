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
    <title> Cadastro </title>
  </head>
  <body>
    <main id="container_cad">
      <form id="cadastro_form" method="post" action="ASSETS/rotinas/auth.php" class="border rounded p-4 border-primary login-form">
        <div id="form_header">
          <h1>Cadastro</h1>
          <i id="mode_icon" class="fa-regular fa-moon"></i>
        </div>
        <div id="inputs">
          <div calss="input_box">
            <label for="name"> 
              Name
              <div class="input-field">
                <i class="fa-regular fa-user"></i>
                <input type="text" required id="name" name="name">
              </div>
            </label>
          </div>
          <label for="e-mail"> 
            E-mail
            <div class="input-field">
              <i class="fa-regular fa-envelope"></i>
              <input type="email" required id="e-mail" name="e-mail">
            </div>
          </label>
        </div>
          
          <label for="Password"> 
            Password
            <div class="input-field">
              <i class="fa-solid fa-key fa-rotate-270"></i>
              <input type="text" id="Password" name="password" required>
            </div>
          </label>
          <label for="Confirme"> 
            Confirme your password
            <div class="input-field">
              <i class="fa-solid fa-key fa-rotate-270"></i>
              <input type="text" id="Confirme" name="confirme" required>
            </div>
          </label>
        </div>
        </div>
       
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
        <button type="submit" id="enviar_button" name="enviar_button">
          Cadastrar 
         </button>
      </form>
    </main>
    <script type="text/javascript" src="ASSETS/js/script2.js"></script>
  </body>
</html>
