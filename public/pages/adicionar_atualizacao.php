<div class="modal" role="alert">
  <button class="close text-h3" role="button">X</button>
  <form method="POST" action="/src/inserir_atualizacao.php">
    <div id="modal__container" class="pa-5 d-flex flex-column justify-content-center row-gap-5">
      <div>
        <label class="text-h3 d-flex flex-column" for="modal__titulo">Titulo</label>
        <input id="modal__titulo" type="text" class="py-2 px-3 text-h6 color-neutral-light" name="titulo">
      </div>

      <div>
        <label class="text-h3 d-flex flex-column" for="modal__data">Data</label>
        <input id="modal__data" type="date" class="py-2 px-3 text-h6 color-neutral-light" name="data">
      </div>

      <div>
        <label class="text-h3 d-flex flex-column" for="descricao">Descricao</label>
        <textarea name="descricao" id="descricao" rows="5" class="text-body"></textarea>
      </div>

      <button type="submit" class="align-self-center btn flat text-button color-neutral-light text-decoration-none text-center" style="width: 45%;">SALVAR</button>
    </div>
  </form>
</div>