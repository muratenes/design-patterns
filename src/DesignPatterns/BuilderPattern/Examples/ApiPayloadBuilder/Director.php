<?php

class Director
{
    public function build(BuilderInterface $builder): Client
    {
        $builder
            ->setUrl()
            ->addHeaders()
            ->setMethod()
            ->addBody();

        return $builder->getClient();
    }
}