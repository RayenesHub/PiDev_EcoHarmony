<?php

namespace App\Entity;

use App\Repository\PuitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PuitsRepository::class)]
class Puits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idp = null;

    #[ORM\Column(length: 50)]
    private ?string $diametre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datefab = null;

    #[ORM\Column(length: 255)]
    private ?string $debit = null;

    #[ORM\Column(length: 255)]
    private ?string $equipement = null;

    #[ORM\ManyToOne(inversedBy: 'idpuits')]
    private ?Nappe $idnappe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function setIdp(int $idp): static
    {
        $this->idp = $idp;

        return $this;
    }

    public function getDiametre(): ?string
    {
        return $this->diametre;
    }

    public function setDiametre(string $diametre): static
    {
        $this->diametre = $diametre;

        return $this;
    }

    public function getDatefab(): ?\DateTimeInterface
    {
        return $this->datefab;
    }

    public function setDatefab(\DateTimeInterface $datefab): static
    {
        $this->datefab = $datefab;

        return $this;
    }

    public function getDebit(): ?string
    {
        return $this->debit;
    }

    public function setDebit(string $debit): static
    {
        $this->debit = $debit;

        return $this;
    }

    public function getEquipement(): ?string
    {
        return $this->equipement;
    }

    public function setEquipement(string $equipement): static
    {
        $this->equipement = $equipement;

        return $this;
    }

    public function getIdnappe(): ?Nappe
    {
        return $this->idnappe;
    }

    public function setIdnappe(?Nappe $idnappe): static
    {
        $this->idnappe = $idnappe;

        return $this;
    }
}
