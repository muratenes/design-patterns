<?php

namespace App\DesignPatterns\BuilderPattern\Examples\CustomerBuilder;

interface CustomerBuilderInterface
{
    public function getFirstName(): string;

    public function getLastName(): string;

    public function getAge(): int;

    public function getEmail(): string;

    public function getPhone(): string;


    public function setFirstName(string $name): self;

    public function setLastName(string $lastname): self;

    public function setAge(int $age): self;

    public function setEmail(string $email): self;

    public function setPhone(string $phone): self;

    public function build(): Customer;
}