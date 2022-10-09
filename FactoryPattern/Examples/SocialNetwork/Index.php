<?php

require 'kernel.php';

post(new FacebookPoster("murat.karabacak@gmail.com", "1111111"));
post(new LinkedinPoster());

function post(SocialNetworkPoster $networkPoster)
{
    $networkPoster->post();
}