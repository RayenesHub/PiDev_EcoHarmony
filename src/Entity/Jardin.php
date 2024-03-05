<?php

namespace App\Entity;

use App\Repository\JardinRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: JardinRepository::class)]
class Jardin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le lieu du jardin est obligatoire.")]
    #[Assert\Length(
        max: 10,
        maxMessage: "Le lieu du jardin ne peut pas dépasser 10 caractères."
    )]
    private ?string $lieu = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(
        min: 1,
        max: 20,
        minMessage: "La taille du jardin doit comporter au moins {{1 }} caractère.",
        maxMessage: "La taille du jardin ne peut pas dépasser {{ 20}} caractères."
    )]
    private ?string $taille = null;

    #[ORM\OneToMany(mappedBy: 'jardin', targetEntity: Plante::class)]
    private Collection $Plante;

   

    #[ORM\Column(length: 50)]
    private ?string $Entretien = null;

    public function __construct()
    {
        $this->Plante = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * @return Collection<int, Plante>
     */
    public function getPlante(): Collection
    {
        return $this->Plante;
    }

    public function addPlante(Plante $Plante): static
    {
        if (!$this->Plante->contains($Plante)) {
            $this->Plante->add($Plante);
            $Plante->setJardin($this);
        }

        return $this;
    }

    public function removePlante(Plante $Plante): static
    {
        if ($this->Plante->removeElement($Plante)) {
            // set the owning side to null (unless already changed)
            if ($Plante->getJardin() === $this) {
                $Plante->setJardin(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        // Vous pouvez ajuster la chaîne de caractères selon vos besoins
        return $this->lieu . ' (' . $this->taille . ')';
    }

   

    public function getEntretien(): ?string
    {
        return $this->Entretien;
    }

    public function setEntretien(string $Entretien): static
    {
        $this->Entretien = $Entretien;

        return $this;
    }
}
