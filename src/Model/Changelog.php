<?php 

namespace frankwsb\mf2\Model;

class Changelog
{
  private readonly ?int $id;
  private readonly string $title;
  private readonly string $date;
  private readonly string $description;


  public function __construct(int $id, string $title, string $date, string $description)
  {
    $this->id = $id;
    $this->title = $title;
    $this->date = $date;
    $this->description = $description;
  }

  public function setTitle(string $title): void
  {
    $this->title = $title;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function setDate(string $date): void
  {
    $this->date = $date;
  }

  public function getDate(): string
  {
    return $this->date;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
  }

  public function getDescription(): string
  {
    return $this->description;
  }
  
}