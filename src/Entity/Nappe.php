<?php

namespace App\Entity;

use App\Repository\NappeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NappeRepository::class)]
class Nappe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idnap = null;

    #[ORM\Column(length: 20)]
    private ?string $geologie = null;

    #[ORM\Column(nullable: true)]
    private ?float $temperature = null;

    #[ORM\Column]
    private ?float $profondeur = null;

    #[ORM\OneToMany(mappedBy: 'idnappe', targetEntity: Puits::class)]
    private Collection $idpuits;

    public function __construct()
    {
        $this->idpuits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdnap(): ?int
    {
        return $this->idnap;
    }

    public function setIdnap(int $idnap): static
    {
        $this->idnap = $idnap;

        return $this;
    }

    public function getGeologie(): ?string
    {
        return $this->geologie;
    }

    public function setGeologie(string $geologie): static
    {
        $this->geologie = $geologie;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(?float $temperature): static
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getProfondeur(): ?float
    {
        return $this->profondeur;
    }

    public function setProfondeur(float $profondeur): static
    {
        $this->profondeur = $profondeur;

        return $this;
    }

    /**
     * @return Collection<int, Puits>
     */
    public function getIdpuits(): Collection
    {
        return $this->idpuits;
    }

    public function addIdpuit(Puits $idpuit): static
    {
        if (!$this->idpuits->contains($idpuit)) {
            $this->idpuits->add($idpuit);
            $idpuit->setIdnappe($this);
        }

        return $this;
    }

    public function removeIdpuit(Puits $idpuit): static
    {
        if ($this->idpuits->removeElement($idpuit)) {
            // set the owning side to null (unless already changed)
            if ($idpuit->getIdnappe() === $this) {
                $idpuit->setIdnappe(null);
            }
        }

        return $this;
    }
}
