<?php

class FacebookConnector implements Connector
{

    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): Connector
    {
        echo "facebook logged with " . $this->email . PHP_EOL;

        return $this;
    }

    public function post(string $content): Connector
    {
        echo "facebook post created with " . $content . PHP_EOL;

        return $this;
    }

    public function logOut(): Connector
    {
        echo "logout from facebook " . $this->email . PHP_EOL;

        return $this;
    }
}