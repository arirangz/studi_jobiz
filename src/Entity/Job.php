<?php

namespace App\Entity;

use DateTimeImmutable;

class Job extends Entity
{
    protected ?int $id = null;
    protected ?string $title = null;
    protected ?string $description = null;
    protected ?int $salary = null;
    protected ?int $countryId = null;
    protected ?int $companyId = null;
    protected ?DateTimeImmutable $createdAt = null;

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of salary
     */
    public function getSalary(): ?int
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     */
    public function setSalary(?int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of countryId
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    /**
     * Set the value of countryId
     */
    public function setCountryId(?int $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get the value of companyId
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * Set the value of companyId
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Get the value of createdAt
     */
    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}