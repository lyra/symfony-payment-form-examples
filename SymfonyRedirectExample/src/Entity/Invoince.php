<?php

namespace App\Entity;

use App\Repository\InvoinceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvoinceRepository::class)
 */
class Invoince
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=255)
     */
    private $id;

    /**
     * @ORM\Column(type="binary", length=255, nullable=true)
     */
    private $idOrders;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datePayment;

     /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateCreated;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $custName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $custLastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $identityNumber;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $totalAmount;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
         $this->id = $id;

         return $this;
    }

    public function getIdOrders(): ?string
    {
        return $this->idOrders;
    }

    public function setIdOrders(string $idOrders): self
    {
        $this->idOrders = $idOrders;

        return $this;
    }

    public function getDatePayment(): ?\DateTimeInterface
    {
        return $this->datePayment;
    }

    public function setDatePayment(\DateTimeInterface $datePayment): self
    {
        $this->datePayment = $datePayment;

        return $this;
    }

    public function getCustName(): ?string
    {
        return $this->custName;
    }

    public function setCustName(?string $custName): self
    {
        $this->custName = $custName;

        return $this;
    }

    public function getCustLastName(): ?string
    {
        return $this->custLastName;
    }

    public function setCustLastName(string $custLastName): self
    {
        $this->custLastName = $custLastName;

        return $this;
    }

    public function getIdentityNumber(): ?string
    {
        return $this->identityNumber;
    }

    public function setIdentityNumber(?string $identityNumber): self
    {
        $this->identityNumber = $identityNumber;

        return $this;
    }

    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(string $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of dateCreated
     */ 
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set the value of dateCreated
     *
     * @return  self
     */ 
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }
}
