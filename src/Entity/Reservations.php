<?php

namespace App\Entity;

use App\Repository\ReservationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationsRepository::class)]
class Reservations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $Arrivee;

    #[ORM\Column(type: 'datetime')]
    private $Depart;

    #[ORM\Column(type: 'decimal', precision: 10, scale: '0', nullable: true)]
    private $total;

    #[ORM\Column(type: 'binary')]
    private $confirme;

    #[ORM\OneToOne(targetEntity: suite::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $relation;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private $utilisateur;

    #[ORM\Column(type: 'integer')]
    private $Nbjour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArrivee(): ?\DateTimeInterface
    {
        return $this->Arrivee;
    }

    public function setArrivee(\DateTimeInterface $Arrivee): self
    {
        $this->Arrivee = $Arrivee;

        return $this;
    }

    public function getDepart(): ?\DateTimeInterface
    {
        return $this->Depart;
    }

    public function setDepart(\DateTimeInterface $Depart): self
    {
        $this->Depart = $Depart;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getConfirme()
    {
        return $this->confirme;
    }

    public function setConfirme($confirme): self
    {
        $this->confirme = $confirme;

        return $this;
    }

    public function getRelation(): ?suite
    {
        return $this->relation;
    }

    public function setRelation(suite $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getNbjour(): ?int
    {
        return $this->Nbjour;
    }

    public function setNbjour(int $Nbjour): self
    {
        $this->Nbjour = $Nbjour;

        return $this;
    }
}
