<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>A.S.R - Agendamento de Salas e Recursos</title>
    <link rel="stylesheet" href="css/styleLogin.css" />

    <link rel="shortcut icon" href="/img/faviconASR.ico" type="image/x-icon" />
  </head>

  <body>
    <header id="header">
      <img draggable="false" src="/img/logoEtec.png" />
    </header>

    <main>
      <div class="logo">
        <img draggable="false" src="/img/logoASR.png" />
      </div>

      <form class="loginForm" name="loginForm" action="/agendar">

        <div class="container">
          <div class="input-container">
            <input
              type="text"
              id="Name"
              class="text-input"
              autocomplete="off"
              required
            />
            <label class="label" for="Email">Email</label>
          </div>
          <div class="input-container">
            <input
              type="password"
              id="Email"
              class="text-input"
              autocomplete="off"
              required
            />
            <label class="label" for="Senha">Senha</label>
           </div>
           </div>
        </div>

          <div class="buttonContainer">
           <button class="loginButton">Enviar</button>
           </div>    

      </form>

    <footer>&copy; Todos os direitos reservados</footer>
    <script src="/js/scriptLogin.js"></script>
  </body>
</html>
