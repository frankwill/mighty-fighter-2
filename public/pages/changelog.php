<?php

session_start();

use frankwsb\mf2\Model\Changelog;
use frankwsb\mf2\Repository\ChangelogRepository;

$dbPath = __DIR__ . "/../../banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

require_once dirname(__FILE__) . '/../../vendor/autoload.php';

$repository = new ChangelogRepository($pdo);

$changelogsData = $repository->all();

$changelogObject = array_map(function($changelogsData) {

  $classeChangelog = new Changelog(
    $changelogsData['title'],
    new \DateTimeImmutable($changelogsData['date']),
    $changelogsData['description']
  );

  return $classeChangelog;
}, $changelogsData);

?>

<section class="change container d-flex flex-column align-items-center row-gap-5">
  <span class="text-h2">CHANGELOG</span>
  <span class="text-body text-center">
    Confira o changelog mais recente do nosso jogo: correções de bugs, melhorias de desempenho e ajustes de equilíbrio para tornar sua experiência ainda mais épica!
  </span>
  <hr class="line-divider">
  <?php foreach($changelogObject as $changelog) { ?>
  <div class="changelog d-flex flex-column align-items-start row-gap-3">
    <div class="d-flex align-self-center column-gap-3">
      <span class="text-h5"><?php echo $changelog->getTitle() ?></span>
      <?php if($_SESSION['logado'] ?? "") { ?>
      <button class="btn-edit">
        <span class="material-icons-outlined color-primary-dark">edit</span>
      </button>
      <?php } ?>
    </div>
    <span class="text-caption align-self-center"><?php echo $changelog->getDate() ?></span>
    <?php $listItensChangelog = explode(";", $changelog->getDescription()); ?>
    <ul class="text-body">
      <?php foreach($listItensChangelog as $item) { ?>
      <li><?php echo $item ?></li>
      <?php } ?>
    </ul>
  </div>
  <?php } ?>
  <a href="/changelog" onclick="route()" id="ver-mais-changelog" class="btn flat text-button color-neutral-light text-decoration-none text-center">Ver mais</a>
</section>
