<?php

namespace App\Entity;

use App\Repository\ReserveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReserveRepository::class)]
class Reserve
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Nom du reserve ne doit pas etre vide")]
    private ?string $nomReserve = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"La capacite ne doit pas etre vide")]
    private ?int $Capacite = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le lieu ne doit pas etre vide")]
    private ?string $Lieu = null;

    #[ORM\OneToMany(mappedBy: 'reserve', targetEntity: Animal::class)]
    private Collection $animals;

    public function __construct()
    {
        $this->animals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomReserve(): ?string
    {
        return $this->nomReserve;
    }

    public function setNomReserve(string $nomReserve): static
    {
        $this->nomReserve = $nomReserve;

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

    public function getLieu(): ?string
    {
        return $this->Lieu;
    }

    public function setLieu(string $Lieu): static
    {
        $this->Lieu = $Lieu;

        return $this;
    }

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal): static
    {
        if (!$this->animals->contains($animal)) {
            $this->animals->add($animal);
            $animal->setReserve($this);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): static
    {
        if ($this->animals->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getReserve() === $this) {
                $animal->setReserve(null);
            }
        }

        return $this;
    }



}
