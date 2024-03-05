<?php

namespace App\Entity;

use App\Repository\ParticipantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ParticipantRepository::class)]
class Participant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le nom ne doit pas être vide")]
    #[Assert\Length(min:3, minMessage:"Le nom de l'événement doit contenir au moins 3 caractères")]
    #[Assert\Regex(pattern:"/^[a-zA-Z\s]+$/", message:"Le nom de l'événement ne peut contenir que des lettres et des espaces")]
    private ?string $nomParticipant = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le prénom ne doit pas être vide")]
    #[Assert\Length(min:3, minMessage:"Le prénom de l'événement doit contenir au moins 3 caractères")]
    #[Assert\Regex(pattern:"/^[a-zA-Z\s]+$/", message:"Le prénom de l'événement ne peut contenir que des lettres et des espaces")]
    private ?string $prenomParticipant = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"L'email ne doit pas être vide")]
    #[Assert\Email(message: "Veuillez entrer un email valide")]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'participants')]
    #[Assert\NotBlank(message:"Vous devez choisir un événement")]
    private ?Event $event = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomParticipant(): ?string
    {
        return $this->nomParticipant;
    }

    public function setNomParticipant(string $nomParticipant): static
    {
        $this->nomParticipant = $nomParticipant;

        return $this;
    }

    public function getPrenomParticipant(): ?string
    {
        return $this->prenomParticipant;
    }

    public function setPrenomParticipant(string $prenomParticipant): static
    {
        $this->prenomParticipant = $prenomParticipant;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): static
    {
        $this->event = $event;

        return $this;
    }
}
