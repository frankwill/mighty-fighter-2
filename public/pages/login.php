<section class="login container d-flex flex-column align-items-center justify-content-start row-gap-5">
  <span class="text-h2">ENTRE COM SUA CONTA</span>
  <span class="text-body text-center">
    Se você for administrador faça login para atualizar as changelogs de Mighty Fighter 2 deixar os players atualizados sobre novas atualizações do jogo.
  </span>
  <hr class="line-divider" />
  <form method="POST" action="autenticar_usuario.php">
    <div class="form-login__container pa-5 d-flex flex-column justify-content-center row-gap-5">
      <div>
        <label class="text-h3 d-flex flex-column" for="">USUARIO</label>
        <input type="text" class="form-login__input py-2 px-3 text-h6 color-neutral-light" name="usuario">
      </div>
  
      <div>
        <label class="text-h3 d-flex flex-column" for="">SENHA</label>
        <input type="password" class="form-login__input py-2 px-3 text-h6 color-neutral-light" name="senha">
      </div>

      <button type="submit" class="form-login__button align-self-center py-3 px-4 color-neutral-light text-h6">Entrar</button>
    </div>
  </form>
</section>