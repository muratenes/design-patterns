<?php

class LinkedinConnector implements Connector
{

    public function logIn(): Connector
    {
        echo "linkedin logged";

        return $this;
    }

    public function post(): Connector
    {
        echo "linkedin post uploaded..";

        return $this;
    }

    public function logOut(): Connector
    {
        echo "logout from linkedin..";

        return $this;
    }
}