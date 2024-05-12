<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mighty Fighter 2 | Início</title>
    <link  rel="stylesheet" type="text/css" href="public/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-icons@1.13.12/iconfont/material-icons.min.css">
  </head>
  <body>
    <div id="root">
      <header class="d-flex align-items-center pb-9">
        <nav class="navigation__container d-flex column-gap-9 text-h6 pa-3">
          <a href="/" onclick="route()" class="navigation__links">Início</a>
          <a href="/lutadores" onclick="route()" class="navigation__links">Lutadores</a>
          <a href="/social" onclick="route()" class="navigation__links">Social</a>
          <a href="/changelog" onclick="route()" class="navigation__links">Changelog</a>
          <a href="/login" onclick="route()" class="navigation__links">Logar</a>
        </nav>
      </header>
      <div id="main-page" class="d-flex flex-column align-items-center row-gap-10"></div>
      <footer class="rodape d-flex align-items-center justify-content-around mt-10 py-3">
        <span class="text-subtitle color-neutral-medium-light">© 2024 Mighty Fighter 2. Todos os direitos reservados.</span>
        <div>
          <img class="mr-1" src="public/assets/images/x-light.svg" alt="Logotipo X">
          <img src="public/assets/images/youtube-light.svg" alt="Logotipo Youtube">
        </div>
      </footer>
    </div>

    <script src="public/assets/js/router.js"></script>
    <script type="module" src="public/assets/js/script.js"></script>
  </body>
</html>
