<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le nom ne doit pas être vide")]
    #[Assert\Length(min:3, minMessage:"Le nom de l'événement doit contenir au moins 3 caractères")]
    private ?string $nomEvent = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le lieux ne doit pas être vide")]
    #[Assert\Length(min:5, minMessage:"Le lieux de l'événement doit contenir au moins 5 caractères")]
    private ?string $lieuxEvent = null;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Participant::class, cascade:["remove"])]
    private Collection $participants;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"La déscription ne doit pas être vide")]
    #[Assert\Length(min:5, max:255, minMessage:"Le déscription de l'événement doit contenir au moins 10 caractères",maxMessage:"Le déscription de l'événement ne doit pas dépasser 255 caractères")]
    private ?string $descriptionEvent = null;

    #[ORM\Column(length: 700)]
    #[Assert\NotBlank(message:"Le lien de l'affiche doit pas être vide")]
    #[Assert\Length(max:700, maxMessage:"Le lien de l'affiche ne doit pas dépasser 700 caractères")]
    private ?string $afficheEvent = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\GreaterThan("today", message:"La date de l'événement doit être ultérieure à la date actuelle")]
    private ?\DateTimeInterface $start = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\GreaterThan(propertyPath:"start", message:"L'heure de fin doit être supérieure à l'heure de début")]
    private ?\DateTimeInterface $end = null;

    public function __construct()
    {
        $this->participants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): static
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getLieuxEvent(): ?string
    {
        return $this->lieuxEvent;
    }

    public function setLieuxEvent(string $lieuxEvent): static
    {
        $this->lieuxEvent = $lieuxEvent;

        return $this;
    }

    /**
     * @return Collection<int, Participant>
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addParticipant(Participant $participant): static
    {
        if (!$this->participants->contains($participant)) {
            $this->participants->add($participant);
            $participant->setEvent($this);
        }

        return $this;
    }

    public function removeParticipant(Participant $participant): static
    {
        if ($this->participants->removeElement($participant)) {
            // set the owning side to null (unless already changed)
            if ($participant->getEvent() === $this) {
                $participant->setEvent(null);
            }
        }

        return $this;
    }

    public function getDescriptionEvent(): ?string
    {
        return $this->descriptionEvent;
    }

    public function setDescriptionEvent(string $descriptionEvent): static
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    public function getAfficheEvent(): ?string
    {
        return $this->afficheEvent;
    }

    public function setAfficheEvent(string $afficheEvent): static
    {
        $this->afficheEvent = $afficheEvent;

        return $this;
    }

    public function __toString(): string
    {
        // Retourne une représentation de chaîne de caractères de l'objet
        return $this->nomEvent; // Personnalisez selon vos besoins
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): static
    {
        $this->end = $end;

        return $this;
    }
}
