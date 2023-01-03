<?php

namespace App\DesignPatterns\BuilderPattern\Examples\CustomerBuilder;

class Customer
{
    private string $firstName;
    private string $lastName;
    private int $age;
    private string $email;
    private string $phone;

    public function __construct(CustomerBuilderInterface $builder)
    {
        $this->firstName = $builder->getFirstName();
        $this->lastName = $builder->getLastName();
        $this->age = $builder->getAge();
        $this->email = $builder->getEmail();
        $this->phone = $builder->getPhone();
    }
}