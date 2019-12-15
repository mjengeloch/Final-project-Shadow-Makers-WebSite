<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Log;
use RestClient;

class Twitch
{
    /**
     * @var RestClient
     */
    private $twitchClientRest;

    public function __construct()
    {
        $this->twitchClientRest = new RestClient([
            'base_url' => "https://api.twitch.tv/helix",
            'format' => "json",
            'headers' => ['Client-ID' => env('TWITCH_KEY')]
        ]);
    }

    public function streamUser($login)
    {
        $resultsTwitchId = $this->twitchClientRest->get('/users', ['login' => $login]);
        $stream = new Stream();
        $stream->setInfoStream($this->twitchClientRest->get('/streams', ['user_id' => $resultsTwitchId['data']['0']->id]));
        $gameId = $stream->getInfoStream();
        if ($gameId['data'] != null){
            $stream->setInfoGame($this->twitchClientRest->get('/games', ['id' => $gameId['data']['0']->game_id]));
        }

        return $stream;
    }
}
