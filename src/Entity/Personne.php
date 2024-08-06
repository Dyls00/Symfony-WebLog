<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonneRepository::class)]
class Personne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $firstname = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $age = null;


    /**
     * @var Collection<int, Role>
     */
    #[ORM\ManyToMany(targetEntity: Role::class)]
    private Collection $role;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $password = null;

    /**
     * @var Collection<int, Unite>
     */
    #[ORM\ManyToMany(targetEntity: Unite::class, inversedBy: 'personnes')]
    private Collection $unite;

    public function __construct()
    {
        $this->role = new ArrayCollection();
        $this->unite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return Collection<int, role>
     */
    public function getRole(): Collection
    {
        return $this->role;
    }

    public function addRole(role $role): static
    {
        if (!$this->role->contains($role)) {
            $this->role->add($role);
        }

        return $this;
    }

    public function removeRole(role $role): static
    {
        $this->role->removeElement($role);

        return $this;
    }
    public function __toString(): string
    {
        return $this -> designation;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection<int, Unite>
     */
    public function getUnite(): Collection
    {
        return $this->unite;
    }

    public function addUnite(Unite $unite): self
    {
        if (!$this->unite->contains($unite)) {
            $this->unite[] = $unite;
            $unite->addPersonne($this); // Si nécessaire, en fonction de ta relation
        }

        return $this;
    }

    public function removeUnite(Unite $unite): static
    {
        $this->unite->removeElement($unite);

        return $this;
    }
}
