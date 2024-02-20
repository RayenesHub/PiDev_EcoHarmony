<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\DBAL\Types\Types;
use Scheb\TwoFactorBundle\Model\Google\TwoFactorInterface;



#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'Il existe déjà un compte avec cette email')]

class User implements UserInterface//, TwoFactorInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le CIN ne doit pas être vide.')]
    #[Assert\Type(type: 'numeric', message: 'Le CIN doit être un nombre.')]
    #[Assert\GreaterThanOrEqual(value: 0, message: 'CIN ne peuvent pas être négatifs.')]
    #[Assert\Length(
        min: 8,
    max: 8,
    exactMessage: 'Le CIN doit comporter exactement {{ limit }} chiffres.',
    
    )]
    private ?string $cin = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'Le nom ne doit pas être vide.')]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Il faut inserer au moins {{ limit }} characteres',
        maxMessage: 'Il faut inserer au maximum {{ limit }} characteres',
    )]
    #[Assert\Type(
        type:"string",
        message:"veuillez inserer un nom correct "
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'Le pronom ne doit pas être vide.')]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le mot de passe ne doit pas être vide.')]
    #[Assert\Length(
        min: 8,
        minMessage: 'Le mot de passe doit contenir au moins 8 caractères.'
    )]
    private ?string $mdp = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'email ne doit pas être vide.')]
    #[Assert\Email(message: 'Format d\'email invalide.')]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'adresse ne peut pas être vide.')]
    #[Assert\Length(max: 50, maxMessage: 'L\'adresse ne peut pas dépasser {{ limit }} caractères.')]
    private ?string $adresse = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le numéro de téléphone ne peut pas être vide.')]
    #[Assert\Length(
        min: 8,
    max: 8,
    exactMessage: 'Le numéro de téléphone doit comporter exactement {{ limit }} chiffres.',
    
    )]
    #[Assert\GreaterThanOrEqual(value: 0, message: 'Le numéro ne peuvent pas être négatifs.')]
    private ?int $numerotel = null;


    #[ORM\Column(length: 255)]
    private $role;

    #[ORM\Column(length: 255)]
    
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): static
    {
        $this->cin = $cin;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $Email): static
    {
        $this->email = $Email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumerotel(): ?int
    {
        return $this->numerotel;
    }

    public function setNumerotel(int $numerotel): static
    {
        $this->numerotel = $numerotel;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }



    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
    }


   

    public function getRoles()
    {
        return [$this->role]; // You might need to adjust this depending on your use case
    }

    public function getPassword()
    {
        return $this->mdp;
    }

    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    public function getUsername()
    {
        return $this->email;
    }
  

    

    

    


   

    


    

    

}

