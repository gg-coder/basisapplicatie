<?php

namespace App\Entity;

use App\Repository\ProductenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductenRepository::class)
 */
class Producten
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Productnaam;

    /**
     * @ORM\Column(type="float")
     */
    private $Prijs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Productomschrijving;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductnaam(): ?string
    {
        return $this->Productnaam;
    }

    public function setProductnaam(string $Productnaam): self
    {
        $this->Productnaam = $Productnaam;

        return $this;
    }

    public function getPrijs(): ?float
    {
        return $this->Prijs;
    }

    public function setPrijs(float $Prijs): self
    {
        $this->Prijs = $Prijs;

        return $this;
    }

    public function getProductomschrijving(): ?string
    {
        return $this->Productomschrijving;
    }

    public function setProductomschrijving(string $Productomschrijving): self
    {
        $this->Productomschrijving = $Productomschrijving;

        return $this;
    }
}
