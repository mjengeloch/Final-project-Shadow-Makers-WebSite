<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Informations;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $displayedMember = Informations::where('twitch', 'shadowmakersfr')
            ->first();

        $getYoutube = getYoutube($displayedMember);
        $getTwitch = getTwitch($displayedMember);

        return view('front.welcome', compact('displayedMember'), ['reponse' => $getYoutube['reponse'], 'channelId' => $getYoutube['channelID'], 'resultsTwitch' => $getTwitch['resultsTwitch'], 'infoGame' => $getTwitch['infoGame']]);
    }

    /**
     * @param Informations $twitch
     * @return Factory|View
     */
    public function show(Informations $twitch)
    {
        $getYoutube = getYoutube($twitch);
        $getTwitch = getTwitch($twitch);

        return view('front.welcome', ["displayedMember" => $twitch, 'reponse' => $getYoutube['reponse'], 'channelId' => $getYoutube['channelID'], 'resultsTwitch' => $getTwitch['resultsTwitch'], 'infoGame' => $getTwitch['infoGame']]);
    }

}
