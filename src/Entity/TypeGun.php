<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TypeGunRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeGunRepository::class)]
#[ApiResource]
class TypeGun
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createAt = null;

    #[ORM\OneToMany(mappedBy: 'typeGun', targetEntity: Gun::class, orphanRemoval: true)]
    private Collection $guns;

    public function __construct()
    {
        $this->guns = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeImmutable
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeImmutable $createAt): static
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * @return Collection<int, Gun>
     */
    public function getGuns(): Collection
    {
        return $this->guns;
    }

    public function addGun(Gun $gun): static
    {
        if (!$this->guns->contains($gun)) {
            $this->guns->add($gun);
            $gun->setTypeGun($this);
        }

        return $this;
    }

    public function removeGun(Gun $gun): static
    {
        if ($this->guns->removeElement($gun)) {
            // set the owning side to null (unless already changed)
            if ($gun->getTypeGun() === $this) {
                $gun->setTypeGun(null);
            }
        }

        return $this;
    }
}
