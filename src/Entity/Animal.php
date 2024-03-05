<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\Column(length: 255)]
    private ?string $imageLink = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\OneToMany(mappedBy: 'idanimal', targetEntity: Adopter::class)]
    private Collection $adopters;

    public function __construct()
    {
        $this->adopters = new ArrayCollection();
    }

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

    public function getImageLink(): ?string
    {
        return $this->imageLink;
    }

    public function setImageLink(string $imageLink): static
    {
        $this->imageLink = $imageLink;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection<int, Adopter>
     */
    public function getAdopters(): Collection
    {
        return $this->adopters;
    }

    public function addAdopter(Adopter $adopter): static
    {
        if (!$this->adopters->contains($adopter)) {
            $this->adopters->add($adopter);
            $adopter->setIdanimal($this);
        }

        return $this;
    }

    public function removeAdopter(Adopter $adopter): static
    {
        if ($this->adopters->removeElement($adopter)) {
            // set the owning side to null (unless already changed)
            if ($adopter->getIdanimal() === $this) {
                $adopter->setIdanimal(null);
            }
        }

        return $this;
    }



    public function __toString(): string
    {
        // Return a meaningful representation of the Animal entity,
        // for example, its name or some other descriptive property.
        return $this->getCategorie() ?? 'Animal';
    }
}
