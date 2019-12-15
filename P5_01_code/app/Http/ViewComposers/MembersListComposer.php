<?php

namespace App\Http\ViewComposers;

use App\Informations;
use App\User;
use Illuminate\View\View;

class MembersListComposer
{
    public function compose(View $view)
    {
        $allMembers = User::all();

        foreach ($allMembers as $member){
            $informations = Informations::where('user_id', $member->id)->first();

            $list[] = array('name' => $member->name, 'image' => $informations->image);
        }

        $membersList = collect($list)->sortBy('name')->values()->toArray();


        $view->with('membersList', $membersList);
    }
}
