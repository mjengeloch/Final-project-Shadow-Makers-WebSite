<?php

namespace App\Libraries;

use Google_Client;
use Google_Service_YouTube;

class Youtube
{
    private $youtube;

    public function __construct()
    {
        $client = new Google_Client();
        $client->setDeveloperKey(env('YOUTUBE_KEY'));

        $this->youtube = new Google_Service_YouTube($client);
    }

    public function getVideo(string $channelId)
    {
        return $this->youtube->search->listSearch('snippet', ['channelId' => $channelId, 'order' => 'date', 'maxResults' => 3, 'type' => 'video']);
    }
}
