<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DataRepository")
 */
class Data
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $acceleratiaX;

    /**
     * @ORM\Column(type="float")
     */
    private $acceleratiaY;

    /**
     * @ORM\Column(type="float")
     */
    private $acceleratiaZ;

    /**
     * @ORM\Column(type="float")
     */
    private $gyroscopeX;

    /**
     * @ORM\Column(type="float")
     */
    private $gyroscopeY;

    /**
     * @ORM\Column(type="float")
     */
    private $gyroscopeZ;

    /**
     * @ORM\Column(type="float")
     */
    private $magnetometruX;

    /**
     * @ORM\Column(type="float")
     */
    private $magnetometruY;

    /**
     * @ORM\Column(type="float")
     */
    private $magnetometruZ;

    /**
     * @ORM\Column(type="float")
     */
    private $temperatura;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcceleratiaX(): ?float
    {
        return $this->acceleratiaX;
    }

    public function setAcceleratiaX(float $acceleratiaX): self
    {
        $this->acceleratiaX = $acceleratiaX;

        return $this;
    }

    public function getAcceleratiaY(): ?float
    {
        return $this->acceleratiaY;
    }

    public function setAcceleratiaY(float $acceleratiaY): self
    {
        $this->acceleratiaY = $acceleratiaY;

        return $this;
    }

    public function getAcceleratiaZ(): ?float
    {
        return $this->acceleratiaZ;
    }

    public function setAcceleratiaZ(float $acceleratiaZ): self
    {
        $this->acceleratiaZ = $acceleratiaZ;

        return $this;
    }

    public function getGyroscopeX(): ?float
    {
        return $this->gyroscopeX;
    }

    public function setGyroscopeX(float $gyroscopeX): self
    {
        $this->gyroscopeX = $gyroscopeX;

        return $this;
    }

    public function getGyroscopeY(): ?float
    {
        return $this->gyroscopeY;
    }

    public function setGyroscopeY(float $gyroscopeY): self
    {
        $this->gyroscopeY = $gyroscopeY;

        return $this;
    }

    public function getGyroscopeZ(): ?float
    {
        return $this->gyroscopeZ;
    }

    public function setGyroscopeZ(float $gyroscopeZ): self
    {
        $this->gyroscopeZ = $gyroscopeZ;

        return $this;
    }

    public function getMagnetometruX(): ?float
    {
        return $this->magnetometruX;
    }

    public function setMagnetometruX(float $magnetometruX): self
    {
        $this->magnetometruX = $magnetometruX;

        return $this;
    }

    public function getMagnetometruY(): ?float
    {
        return $this->magnetometruY;
    }

    public function setMagnetometruY(float $magnetometruY): self
    {
        $this->magnetometruY = $magnetometruY;

        return $this;
    }

    public function getMagnetometruZ(): ?float
    {
        return $this->magnetometruZ;
    }

    public function setMagnetometruZ(float $magnetometruZ): self
    {
        $this->magnetometruZ = $magnetometruZ;

        return $this;
    }

    public function getTemperatura(): ?float
    {
        return $this->temperatura;
    }

    public function setTemperatura(float $temperatura): self
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }
}
