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

  public function add(Changelog $changelog): bool
  {    
    $sql = "INSERT INTO changelog (title, date, description) VALUES (:title, :date, :description)";

    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(":title", $changelog->getTitle());
    $statement->bindValue(":date", $changelog->getDate());
    $statement->bindValue(":description", $changelog->getDescription());

    return $statement->execute();
  } 

  public function all()
  {
    $sql = "SELECT * FROM changelog ORDER BY id DESC";
    $statement = $this->pdo->query($sql);
    $changelogList = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $changelogList;
  }

}