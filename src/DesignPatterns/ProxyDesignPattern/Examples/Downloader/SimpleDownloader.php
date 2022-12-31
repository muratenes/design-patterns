<?php

class SimpleDownloader implements DownloaderContract
{
    public function download(string $url): string
    {
        echo "Belirtilen Url internet üzerinden indiriliyor.\n";
        $result = file_get_contents($url);
        echo "İndirilen bytes: " . strlen($result) . "\n";

        return $result;
    }
}