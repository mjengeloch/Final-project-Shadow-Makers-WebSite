<?php

namespace App\Http\ViewComposers;

use App\Informations;
use App\Libraries\Twitch;
use Illuminate\View\View;

class StreamerComposer
{
    public function compose(View $view)
    {
        $allMembers = Informations::where("twitch", "!=", null)->get();

        foreach ($allMembers as $member){
            $twitchState = new Twitch();
            $streamState = $twitchState->streamUser($member->twitch);
            $list[] = array('twitch' => $member->twitch, 'image' => $member->image, 'state' => $streamState->getInfoStream());
        }
        $membersStates = collect($list)->sortByDesc('state.data')->values()->toArray();

        $view->with('membersStates', $membersStates);
    }
}
