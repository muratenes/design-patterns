<?php

class CachingDownloader implements DownloaderContract
{
    /**
     * @var SimpleDownloader
     */
    private $downloader;

    /**
     * @var string[]
     */
    private $cache = [];

    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (isset($this->cache[$url])) {
            return $this->cache[$url];
        }

        $result = $this->downloader->download($url);
        $this->cache[$url] = $result;

        return $result;
    }
}