<?php 

namespace frankwsb\mf2\Repository;

use frankwsb\mf2\Model\Changelog;
use PDO;

class ChangelogRepository
{
  private PDO $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function update(Changelog $changelog): bool
  {
    $sql = "UPDATE     changelog 
            SET        title = :title,
                       date = :date,
                       description = :description
            WHERE      id = :id;";
    
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(":title", $changelog->getTitle());
    $statement->bindValue(":date", $changelog->getDate());
    $statement->bindValue(":description", $changelog->getDescription());
    $statement->bindValue(":id", $changelog->getId(), PDO::PARAM_INT);

    return $statement->execute();

  } 

  public function all()
  {
    $sql = "SELECT * FROM changelog";
    $statement = $this->pdo->query($sql);
    $changelogList = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $changelogList;
  }

}