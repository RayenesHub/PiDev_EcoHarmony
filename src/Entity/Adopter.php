<?php

namespace App\Entity;

use App\Repository\AdopterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdopterRepository::class)]
class Adopter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $emailadopter = null;

    #[ORM\ManyToOne(inversedBy: 'adopters')]
    private ?Animal $idanimal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmailadopter(): ?string
    {
        return $this->emailadopter;
    }

    public function setEmailadopter(string $emailadopter): static
    {
        $this->emailadopter = $emailadopter;

        return $this;
    }

    public function getIdanimal(): ?Animal
    {
        return $this->idanimal;
    }

    public function setIdanimal(?Animal $idanimal): static
    {
        $this->idanimal = $idanimal;

        return $this;
    }
}
