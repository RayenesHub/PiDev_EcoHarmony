<?php

namespace App\Entity;

use App\Repository\JardinRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JardinRepository::class)]
class Jardin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $lieu = null;

    #[ORM\Column(length: 50)]
    private ?string $taille = null;

    #[ORM\OneToMany(mappedBy: 'jardin', targetEntity: plante::class)]
    private Collection $plante;

    public function __construct()
    {
        $this->plante = new ArrayCollection();
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
     * @return Collection<int, plante>
     */
    public function getPlante(): Collection
    {
        return $this->plante;
    }

    public function addPlante(plante $plante): static
    {
        if (!$this->plante->contains($plante)) {
            $this->plante->add($plante);
            $plante->setJardin($this);
        }

        return $this;
    }

    public function removePlante(plante $plante): static
    {
        if ($this->plante->removeElement($plante)) {
            // set the owning side to null (unless already changed)
            if ($plante->getJardin() === $this) {
                $plante->setJardin(null);
            }
        }

        return $this;
    }
}
