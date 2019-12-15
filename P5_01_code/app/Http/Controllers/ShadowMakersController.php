<?php

namespace App\Http\Controllers;

use App\{Libraries\Youtube, User, Informations};
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ShadowMakersController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('front.shadowmakers');
    }

    /**
     * @param User $user
     * @return Factory|View
     */
    public function show(User $user)
    {
        $informations = Informations::where('user_id', $user->id)->first();

        if($informations->youtube != null){
            $channelID = $informations->youtube;
            $youtube = new Youtube();
            $response = $youtube->getVideo($channelID);

        }else{
            $response = null;
        }

        return view('front.member', compact('user'), ['informations'=> $informations, 'youtube' => $response]);
    }
}
