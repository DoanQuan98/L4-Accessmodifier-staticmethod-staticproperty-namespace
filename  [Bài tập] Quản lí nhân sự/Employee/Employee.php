<?php

namespace Employee;

class Employee
{
    private string $lastName;
    private string $firstName;
    private string $birth;
    private string $address;
    private string $job;

    public function __construct($lastName, $firstName, $birth, $address, $job)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birth = $birth;
        $this->address = $address;
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getBirth(): string
    {
        return $this->birth;
    }

    /**
     * @param mixed $birth
     */
    public function setBirth(string $birth): void
    {
        $this->birth = $birth;
    }

    /**
     * @return mixed
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob(string $job): void
    {
        $this->job = $job;
    }
}