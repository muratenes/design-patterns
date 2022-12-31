<?php

class Index
{
    public function __invoke()
    {
        $url =  "https://google.com";

        // Gerçek nesne üzerinden download işlemi yapıyoruz.
        $realSubject = new SimpleDownloader();
        $realSubject->download($url);

        // Proxy class üzerinden cache kontrolü yapıp verileri getiriyoruz.

        $proxyClass = new CachingDownloader($realSubject);
        $proxyClass->download($url);
    }
}