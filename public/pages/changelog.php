<?php

session_start();

require_once dirname(__FILE__) . '/../../vendor/autoload.php';


use frankwsb\mf2\Model\Changelog;
use frankwsb\mf2\Repository\ChangelogRepository;

use frankwsb\mf2\Infrastructure\Persistence\ConnectionCreate;
$pdo = ConnectionCreate::createConnection();


$repository = new ChangelogRepository($pdo);

$changelogsData = $repository->all();

$changelogObject = array_map(function($changelogsData) {

  $classeChangelog = new Changelog(
    $changelogsData['id'],
    $changelogsData['title'],
    $changelogsData['date'],
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
</section>
