<?php

namespace App\DesignPatterns\BuilderPattern\Examples\CustomerBuilder;

class CustomerBuilder implements CustomerBuilderInterface
{
    private string $firstName;
    private string $lastName;
    private int $age;
    private string $email;
    private string $phone;

    public function setFirstName(string $name): CustomerBuilderInterface
    {
        $this->firstName = $name;

        return $this;
    }

    public function setLastName(string $lastname): CustomerBuilderInterface
    {
        $this->lastName = $lastname;

        return $this;
    }

    public function setAge(int $age): CustomerBuilderInterface
    {
        $this->age = $age;

        return $this;
    }

    public function setEmail(string $email): CustomerBuilderInterface
    {
        $this->email = $email;

        return $this;
    }

    public function setPhone(string $phone): CustomerBuilderInterface
    {
        $this->phone = $phone;

        return $this;
    }

    public function build(): Customer
    {
        return new Customer($this);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}