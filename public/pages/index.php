<?php

use frankwsb\mf2\Repository\ChangelogRepository;

$dbPath = __DIR__ . "/../../banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

require_once 'vendor/autoload.php';

$repository = new ChangelogRepository($pdo);

var_dump($repository->all());

?>

<section class="container d-flex flex-column align-items-center row-gap-9">
  <img src="/public/assets/images/Logo.svg" alt="Mighty Fighter 2 - Logo" width="720">
  <div class="d-flex flex-column align-items-center row-gap-5">
    <span class="text-h6 color-primary-light text-center">
      Desafie seus amigos, lute e se divirta de graça! No nosso mundo de pixels, cada golpe é uma explosão de diversão!
    </span>
    <span class="text-body text-center">
      Em "Mighty Fighter 2", prepare-se para uma experiência única de combate, onde o riso é tão garantido quanto a adrenalina. Neste vibrante jogo de luta, os memes mais famosos da internet são transformados em combatentes carismáticos, cada um armado com movimentos especiais que são tão bizarros quanto engraçados.
    </span>
  </div>
  <div class="d-flex column-gap-5">
    <a href="#" class="btn flat text-button color-neutral-light text-decoration-none text-center">Jogar de graça</a>
    <a href="#" class="btn outlined text-button color-neutral-light text-decoration-none text-center">Assistir trailer</a>
  </div>
</section>

<section class="container d-flex flex-column align-items-center row-gap-5">
  <span class="text-h2">LUTADORES</span>
  <span class="text-body text-center">
    Explore um mundo de diversidade de combate em nosso jogo de luta, com uma vasta seleção de personagens únicos.
  </span>
  <hr class="line-divider">
  <img src="/public/assets/images/poster-lutadores.png" alt="Poster lutadores" width="1000">
  <a href="/lutadores" onclick="route()" id="ver-mais-lutadores" class="btn flat text-button color-neutral-light text-decoration-none text-center">Ver mais</a>
</section>

<section class="social__container d-flex flex-column align-items-center row-gap-5">
  <span class="text-h2">SOCIAL MIGHTY</span>
  <span class="text-body text-center">
    Continue acompanhando nossa rede para não perder nenhuma novidade e se junte à comunidade para compartilhar suas experiências, artes e estratégias favoritas!
  </span>
  <hr class="line-divider">
  <div class="card__container d-flex wrap gap-5">
    <div class="card d-flex flex-column row-gap-2 justify-content-start">
      <div class="card__content column-gap-3">
        <img src="/public/assets/images/x.svg" alt="Logotipo X" width="48" class="card__image">
        <span class="card__title text-h6 color-primary-dark">MIGHTY FIGHTER 2</span>
        <span class="card__data text-body color-neutral-medium-light">01 de abril de 2024</span>
      </div>
      <span class="card__text text-body">
        Quando você decide resolver suas diferenças no jogo de luta em vez de discutir no grupo da família no WhatsApp. 💥 
      </span>
    </div>
    <div class="card d-flex flex-column row-gap-2 justify-content-start">
      <div class="card__content column-gap-3">
        <img src="/public/assets/images/x.svg" alt="Logotipo X" width="48" class="card__image">
        <span class="card__title text-h6 color-primary-dark">MIGHTY FIGHTER 2</span>
        <span class="card__data text-body color-neutral-medium-light">01 de abril de 2024</span>
      </div>
      <span class="card__text text-body">
        Quando você e seu amigo escolhem os mesmos personagens e a luta vira um espelho, só que com mais socos. 😂 
      </span>
    </div>
    <div class="card d-flex flex-column row-gap-2">
      <div class="card__content column-gap-3">
        <img src="/public/assets/images/x.svg" alt="Logotipo X" width="48" class="card__image">
        <span class="card__title text-h6 color-primary-dark">MIGHTY FIGHTER 2</span>
        <span class="card__data text-body color-neutral-medium-light">01 de abril de 2024</span>
      </div>
      <span class="card__text text-body">
        Aquele momento tenso quando você está prestes a vencer a luta, mas seu joystick decide te trair e pular do sofá. 🎮😱 #JoystickTraiçoeiro #QuedaFatal 
      </span>
    </div>
  </div>
  <a href="/social" onclick="route()" id="ver-mais-social" class="btn flat text-button color-neutral-light text-decoration-none text-center">Ver mais</a>
</section>

<section class="change container d-flex flex-column align-items-center row-gap-5">
  <span class="text-h2">CHANGELOG</span>
  <span class="text-body text-center">
    Confira o changelog mais recente do nosso jogo: correções de bugs, melhorias de desempenho e ajustes de equilíbrio para tornar sua experiência ainda mais épica!
  </span>
  <hr class="line-divider">
  <div class="changelog d-flex flex-column align-items-center row-gap-3">
    <div class="d-flex align-items-center column-gap-3">
      <span class="text-h5">Notas do patch - Atualização v01.2</span>
      <button class="btn-edit">
        <span class="material-icons-outlined color-primary-dark">edit</span>
      </button>
    </div>
    <span class="text-caption">01 de abril, 2024</span>
    <ul class="text-body">
      <li>Adicionados 2 novos personagens jogáveis: C. Tonaldo e Aren.</li>
      <li>Ajustes de balanceamento nos ataques especiais de todos os personagens para uma experiência de jogo mais equilibrada.</li>
      <li>Corrigidos diversos bugs, incluindo problemas de colisão de sprites e falhas de ataques.</li>
      <li>Aprimoramentos de desempenho para garantir uma jogabilidade mais fluida.</li>
    </ul>
  </div>
  <div class="changelog d-flex flex-column align-items-center row-gap-3">
    <div class="d-flex align-items-center column-gap-3">
      <span class="text-h5">Notas do patch - Atualização v01.1</span>
      <button class="btn-edit">
        <span class="material-icons-outlined color-primary-dark">edit</span>
      </button>
    </div>
    <span class="text-caption">01 de abril, 2024</span>
    <ul class="text-body">
      <li>Adicionados 2 novos personagens jogáveis: C. Tonaldo e Aren.</li>
      <li>Ajustes de balanceamento nos ataques especiais de todos os personagens para uma experiência de jogo mais equilibrada.</li>
      <li>Corrigidos diversos bugs, incluindo problemas de colisão de sprites e falhas de ataques.</li>
      <li>Aprimoramentos de desempenho para garantir uma jogabilidade mais fluida.</li>
    </ul>
  </div>
  <a href="/changelog" onclick="route()" id="ver-mais-changelog" class="btn flat text-button color-neutral-light text-decoration-none text-center">Ver mais</a>
</section>
