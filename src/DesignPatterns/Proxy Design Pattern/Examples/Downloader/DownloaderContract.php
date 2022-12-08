<?php

interface DownloaderContract
{
    public function download(string $url): string;
}