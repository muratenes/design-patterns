<?php

namespace App\DesignPatterns\BuilderPattern\Examples\CustomerBuilder;

class Index
{
    public function createCustomer(): Customer
    {
        return (new CustomerBuilder())
            ->setAge(12)
            ->setFirstName("Murat")
            ->setLastName("Doe")
            ->setEmail("john@doe.com")
            ->setPhone("0125125")
            ->build();
    }
}