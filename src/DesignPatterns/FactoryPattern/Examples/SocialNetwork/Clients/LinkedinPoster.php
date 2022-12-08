<?php

class LinkedinPoster extends SocialNetworkPoster
{

    public function getConnection(): Connector
    {
        return new LinkedinConnector();
    }
}