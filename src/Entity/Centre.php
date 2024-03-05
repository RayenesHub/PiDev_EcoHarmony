<?php

namespace App\Entity;

use App\Repository\CentreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CentreRepository::class)]
class Centre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
 
    
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Il faut mentionner l'endroit.")]
    private ?string $emplacement = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Il faut indiquer la capacité.")]
    private ?string $capacite = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Il faut mentionner le nom du responsable.")]
    private ?string $responsable = null;

    #[ORM\OneToMany(mappedBy: 'centre', targetEntity: Ordure::class, cascade:["remove"])]//suppression en cascade (pour supprimer l'ordure + centre)
    private Collection $ordures;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function __construct()
    {
        $this->ordures = new ArrayCollection();
    }

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

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getCapacite(): ?string
    {
        return $this->capacite;
    }

    public function setCapacite(string $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getResponsable(): ?string
    {
        return $this->responsable;
    }

    public function setResponsable(string $responsable): static
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * @return Collection<int, Ordure>
     */
    public function getOrdures(): Collection
    {
        return $this->ordures;
    }

    public function addOrdure(Ordure $ordure): static
    {
        if (!$this->ordures->contains($ordure)) {
            $this->ordures->add($ordure);
            $ordure->setCentre($this);
        }

        return $this;
    }

    public function removeOrdure(Ordure $ordure): static
    {
        if ($this->ordures->removeElement($ordure)) {
            // set the owning side to null (unless already changed)
            if ($ordure->getCentre() === $this) {
                $ordure->setCentre(null);
            }
        }

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
