<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"la categorie ne doit pas etre vide")]
    private ?string $Categorie = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"le poid ne doit pas etre vide")]
    private ?float $Poid = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le poid ne doit pas etre vide")]
    private ?string $etat = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    private ?Reserve $reserve = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): static
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getPoid(): ?float
    {
        return $this->Poid;
    }

    public function setPoid(float $Poid): static
    {
        $this->Poid = $Poid;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getReserve(): ?Reserve
    {
        return $this->reserve;
    }

    public function setReserve(?Reserve $reserve): static
    {
        $this->reserve = $reserve;

        return $this;
    }
}
