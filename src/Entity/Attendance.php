<?php

namespace App\Entity;

use App\Repository\AttendanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttendanceRepository::class)
 */
class Attendance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="attendances")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="datetime")
     */
    private $arriveAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $leaveAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPresent;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $absenceReason;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getArriveAt(): ?\DateTimeInterface
    {
        return $this->arriveAt;
    }

    public function setArriveAt(\DateTimeInterface $arriveAt): self
    {
        $this->arriveAt = $arriveAt;

        return $this;
    }

    public function getLeaveAt(): ?\DateTimeInterface
    {
        return $this->leaveAt;
    }

    public function setLeaveAt(\DateTimeInterface $leaveAt): self
    {
        $this->leaveAt = $leaveAt;

        return $this;
    }

    public function getIsPresent(): ?bool
    {
        return $this->isPresent;
    }

    public function setIsPresent(bool $isPresent): self
    {
        $this->isPresent = $isPresent;

        return $this;
    }

    public function getAbsenceReason(): ?string
    {
        return $this->absenceReason;
    }

    public function setAbsenceReason(?string $absenceReason): self
    {
        $this->absenceReason = $absenceReason;

        return $this;
    }

}
