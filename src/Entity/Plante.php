<?php

namespace App\Entity;

use App\Repository\PlanteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: PlanteRepository::class)]
class Plante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom de la plante est obligatoire.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Le nom de la plante ne peut pas dépasser 50 caractères."
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $famille = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex(
        pattern: "/^[^\@\#\$\%\^\&\*\(\)\+=\[\]\{\};:,\.<>\?]*$/",
        message: "La description ne doit pas contenir de caractères spéciaux."
    )]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'plante')]
    private ?Jardin $jardin = null;

    #[ORM\Column(length: 255)]
    private ?string $image=null ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getFamille(): ?string
    {
        return $this->famille;
    }

    public function setFamille(string $famille): static
    {
        $this->famille = $famille;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getJardin(): ?Jardin
    {
        return $this->jardin;
    }

    public function setJardin(?Jardin $jardin): static
    {
        $this->jardin = $jardin;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
