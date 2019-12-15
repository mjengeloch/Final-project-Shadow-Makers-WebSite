<?php

use App\Informations;
use App\Libraries\Twitch;
use App\Libraries\Youtube;

if (!function_exists('getYoutube'))
{
    function getYoutube(Informations $informations)
    {
        $youtube = new Youtube();
        if ($informations->youtube == null || $informations->twitch == 'shadowmakersfr'){
            $channelId = 'UCZiNGnLceGfM_8tXvsa5sgQ'; //ShadowMakersFr Channel
        }else{
            $channelId = $informations->youtube;
        }
        $reponse = $youtube->getVideo($channelId);

        if($reponse['items'] == null){
            $channelId = 'UCZiNGnLceGfM_8tXvsa5sgQ';
            return [
                "reponse" => $youtube->getVideo($channelId),
                "channelID" => $channelId
            ];
        }
        return [
            "reponse" => $reponse,
            "channelID" => $channelId
        ];
    }
}

if (!function_exists('getTwitch'))
{
    function getTwitch(Informations $informations)
    {
        $newTwitch = new Twitch();
        $stream = $newTwitch->streamUser($informations->twitch);
        $resultsTwitch = $stream->getInfoStream();
        $infoGame = $stream->getInfoGame();

        return [
            "resultsTwitch" => $resultsTwitch,
            "infoGame" => $infoGame
        ];
    }
}
