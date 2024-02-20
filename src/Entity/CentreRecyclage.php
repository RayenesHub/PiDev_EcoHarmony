<?php

namespace App\Entity;

use App\Repository\CentreRecyclageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CentreRecyclageRepository::class)]
class CentreRecyclage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $NomCentre = null;

    #[ORM\Column(length: 50)]
    private ?string $Emplacement = null;

    #[ORM\Column]
    private ?int $Capacite = null;

    #[ORM\Column(length: 30)]
    private ?string $Responsable = null;

    #[ORM\OneToMany(mappedBy: 'IdCentre', targetEntity: Dechet::class)]
    private Collection $Iddechet;

    public function __construct()
    {
        $this->Iddechet = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCentre(): ?string
    {
        return $this->NomCentre;
    }

    public function setNomCentre(string $NomCentre): static
    {
        $this->NomCentre = $NomCentre;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->Emplacement;
    }

    public function setEmplacement(string $Emplacement): static
    {
        $this->Emplacement = $Emplacement;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->Capacite;
    }

    public function setCapacite(int $Capacite): static
    {
        $this->Capacite = $Capacite;

        return $this;
    }

    public function getResponsable(): ?string
    {
        return $this->Responsable;
    }

    public function setResponsable(string $Responsable): static
    {
        $this->Responsable = $Responsable;

        return $this;
    }

    /**
     * @return Collection<int, Dechet>
     */
    public function getIddechet(): Collection
    {
        return $this->Iddechet;
    }

    public function addIddechet(Dechet $iddechet): static
    {
        if (!$this->Iddechet->contains($iddechet)) {
            $this->Iddechet->add($iddechet);
            $iddechet->setIdCentre($this);
        }

        return $this;
    }

    public function removeIddechet(Dechet $iddechet): static
    {
        if ($this->Iddechet->removeElement($iddechet)) {
            // set the owning side to null (unless already changed)
            if ($iddechet->getIdCentre() === $this) {
                $iddechet->setIdCentre(null);
            }
        }

        return $this;
    }
}
